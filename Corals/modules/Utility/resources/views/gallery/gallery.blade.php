<div id="gallery">
    @if($editable)
        {!! \Html::style('assets/corals/plugins/dropzone-4.3.0/dropzone.min.css') !!}
        {!! \Html::script('assets/corals/plugins/dropzone-4.3.0/dropzone.min.js') !!}
        <script>
            Dropzone.autoDiscover = false;
        </script>
    @endif
    <style type="text/css">
        .add-photo {
            padding: 0 !important;
            opacity: 0.1;
        }

        .add-photo:hover {
            opacity: 0.2;
        }

        .gallery-item {
            position: relative;
            @if($editable)
                                                            border: 1px solid #B1B1B1;
        @endif





































        }

        .gallery-item, .gallery-item form {
            @if($editable)
                                                            height: 230px;
        @endif





































        }

        .gallery-item img {
            max-height: 220px;
            width: auto;
        }

        .gallery-item form {
            width: 230px;
        }

        .dropzone .dz-message {
            margin: 3em 0;
        }

        .dz-message i {
            font-size: 8em;
            color: #000;
        }

        .dropzone {
            border: 1px solid rgba(0, 0, 0, 0.2);
        }

        .item-buttons {
            top: 190px;
            left: 5px;
            position: absolute;
            margin: 2px 2px;
        }

        .featured-item {
            position: absolute;
            top: 5px;
            left: 5px;
            color: #ff9122;
        }
    </style>
    <ul class="list-inline">
        @foreach($galleryModel->getMedia($galleryModel->galleryMediaCollection) as $media)
            <li class="gallery-item text-center list-inline-item" style="width: 48%">
                @if($media->getCustomProperty('featured', false))
                    <span class="featured-item"><i class="fa fa-fw fa-2x fa-star"></i></span>
                @endif
                <a href="{{ $media->getUrl() }}" data-lightbox="product-gallery">
                    <img src="{{ $media->getUrl() }}" class="img-responsive" alt="Product Gallery Image"/></a>
                @if($editable)
                    <div class="item-buttons" style="display: none;">
                        <a href="{{ url('utilities/gallery/'.$media->id.'/delete') }}"
                           class="btn btn-sm btn-danger item-button" title="Delete Gallery Item"
                           data-action="delete" data-page_action="reloadGallery">
                            <i class="fa fa-fw fa-remove"></i>
                        </a>
                        @if(!$media->getCustomProperty('featured', false))
                            <a href="{{ url('utilities/gallery/'.$media->id.'/mark-as-featured') }}"
                               class="btn btn-sm btn-warning item-button"
                               title="Mark as Featured" data-action="post" data-page_action="reloadGallery">
                                <i class="fa fa-fw fa-star"></i>
                            </a>
                        @endif
                    </div>
                @endif
            </li>
        @endforeach
    </ul>
    @if($editable)
        <div class="">
            <form action="{{ url('utilities/gallery/'.$galleryModel->hashed_id.'/upload') }}" class="dropzone"
                  id="galleryDZ">
                {{ csrf_field() }}
                {{ Form::hidden('model_class', get_class($galleryModel)) }}
            </form>
        </div>
        <script type="text/javascript">
            var galleryDZ = new Dropzone("#galleryDZ", {
                maxFilesize: 1, // MB
                acceptedFiles: 'image/*',
                dictDefaultMessage: '<i class="fa fa-plus fa-fw fa-5x add-photo"></i>',
                queuecomplete: function () {
                    reloadGallery();
                },
                error: function (file, response) {
                    var message;
                    if ($.type(response) === "string")
                        var message = response; //dropzone sends it's own error messages in string
                    else
                        var message = response.message;
                    file.previewElement.classList.add("dz-error");
                    _ref = file.previewElement.querySelectorAll("[data-dz-errormessage]");
                    _results = [];
                    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                        node = _ref[_i];
                        _results.push(node.textContent = message);
                    }
                    return _results;
                }
            });

            function reloadGallery() {
                setTimeout(function () {
                    $.ajax({
                        type: "GET",
                        url: '{{ url('utilities/gallery/'.$galleryModel->hashed_id) }}',
                        data: {
                            model_class: '{!! getObjectClassForViews($galleryModel) !!}'
                        },
                        success: function (data) {
                            $('#gallery').html(data);
                        }
                    });
                }, 500);
            }

            function initGalleryItemButtons() {
                $(document).on("mouseenter", ".gallery-item", function (e) {
                    $(this).find(".item-buttons").show();
                });

                $(document).on("mouseleave", ".gallery-item", function (e) {
                    $(this).find(".item-buttons").hide();
                });
            }

            window.onload = function () {
                initGalleryItemButtons();
            }
        </script>
    @endif
</div>