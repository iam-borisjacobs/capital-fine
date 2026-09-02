@extends('layouts.app')
@section('content')
    @include('admin.topmenu')
    @include('admin.sidebar')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="mt-2 mb-4 d-flex justify-content-between align-items-center">
                    <div>
                        <h1 class="title1">Manage Frontend Images &amp; Hero Banners</h1>
                        <p class="text-muted">Replace, update, and manage all visual assets and hero slider images on your banking frontend.</p>
                    </div>
                    <div>
                        <a href="#" data-toggle="modal" data-target="#addImageModal" class="btn btn-primary btn-round">
                            <i class="fa fa-plus"></i> Add New Image
                        </a>
                        <a href="{{ route('frontpage') }}" class="btn btn-outline-secondary btn-round ml-2">
                            <i class="fa fa-arrow-left"></i> Front Page Settings
                        </a>
                    </div>
                </div>

                <x-danger-alert />
                <x-success-alert />

                @if (isset($errors) && $errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Errors occurred:</strong>
                        <ul class="mb-0 mt-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Image Grid -->
                <div class="row">
                    @forelse ($images as $img)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 shadow-sm border" style="border-radius: 12px; overflow: hidden;">
                                <div style="position: relative; height: 200px; background: #0f172a; overflow: hidden; display: flex; align-items: center; justify-content: center;">
                                    @php
                                        $imgPath = $img->img_path;
                                        if (str_starts_with($imgPath, 'photos/')) {
                                            $fullUrl = asset('storage/app/public/' . $imgPath);
                                        } else {
                                            $fullUrl = asset('storage/app/public/photos/' . $imgPath);
                                        }
                                    @endphp
                                    <img src="{{ $fullUrl }}" alt="{{ $img->title }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                                    <span class="badge badge-dark" style="position: absolute; top: 12px; right: 12px; background: rgba(0,0,0,0.7); font-weight: 600; padding: 6px 10px; border-radius: 6px;">
                                        ID #{{ $img->id }}
                                    </span>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h4 class="card-title font-weight-bold mb-1" style="color: #1e293b;">{{ $img->title }}</h4>
                                    <p class="text-muted small mb-2">{{ $img->description ?? 'No description provided.' }}</p>
                                    
                                    <div class="p-2 mb-3 bg-light rounded text-monospace small" style="font-size: 0.75rem; word-break: break-all;">
                                        <i class="fa fa-folder-open text-primary"></i> {{ $img->img_path }}
                                    </div>

                                    <div class="mt-auto d-flex justify-content-between align-items-center">
                                        <button class="btn btn-primary btn-sm btn-round" data-toggle="modal" data-target="#editImgModal{{ $img->id }}">
                                            <i class="fa fa-sync-alt mr-1"></i> Replace Image
                                        </button>
                                        <a href="{{ url('admin/dashboard/delimg/' . $img->id) }}" class="btn btn-outline-danger btn-sm btn-round" onclick="return confirm('Are you sure you want to remove this image record?')">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Edit / Replace Modal for Image #{{ $img->id }} -->
                        <div class="modal fade" id="editImgModal{{ $img->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title font-weight-bold">Replace Image: {{ $img->title }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('updateimg') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $img->id }}">
                                        <div class="modal-body">
                                            <div class="text-center mb-3">
                                                <img src="{{ $fullUrl }}" alt="Preview" style="max-height: 140px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.15);">
                                            </div>

                                            <div class="form-group">
                                                <label class="font-weight-bold">Image Title</label>
                                                <input type="text" name="img_title" class="form-control" value="{{ $img->title }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label class="font-weight-bold">Image Description</label>
                                                <textarea name="img_desc" class="form-control" rows="2">{{ $img->description }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label class="font-weight-bold">Select New Image File (JPG, PNG, WebP)</label>
                                                <input type="file" name="image" class="form-control-file border p-2 rounded" accept="image/*">
                                                <small class="form-text text-muted">Recommended: 1920x1080 (16:9) for Hero Banners, 800x600 for Showcase sections.</small>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary font-weight-bold">Upload &amp; Replace</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="card p-5 text-center">
                                <h3>No Frontend Images Found</h3>
                                <p class="text-muted">Click "Add New Image" above to upload your first frontend banner.</p>
                            </div>
                        </div>
                    @endforelse
                </div>

                <!-- Add New Image Modal -->
                <div class="modal fade" id="addImageModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-weight-bold">Add New Frontend Image</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('saveimg') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Image Title</label>
                                        <input type="text" name="img_title" class="form-control" placeholder="e.g. Homepage Hero Banner 4" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Image Description</label>
                                        <textarea name="img_desc" class="form-control" rows="2" placeholder="Describe the section where this image will appear"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Upload Image (JPG, PNG, WebP)</label>
                                        <input type="file" name="image" class="form-control-file border p-2 rounded" accept="image/*" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary font-weight-bold">Save Image</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
