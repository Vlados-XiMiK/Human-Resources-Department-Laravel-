 @extends('admin.layouts.main')
 @section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редагування новин</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Головна</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <div class="col-12">

            <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
                @method('PATCH')

                <div class="form-group w-25">

                    <input type="text" class="form-control" name="title" placeholder="Введіть заголовок новини"
                           value="{{ $post->title }}">
                    @error('title')
                    <div class="text-danger">{{ $message }}</div>

                    @enderror
                </div>
                <div class="form-group">
                    <textarea id="summernote" name="content">
                        {{ $post->content }}
                    </textarea>
                    @error('content')
                    <div class="text-danger">Це поле необхідно заповнити</div>

                    @enderror
                </div>

                <div class="form-group w-50">
                    <label for="exampleInputFile">Додати прев'ю</label>
                    <div class="w-50 mb-2">
                        <img src="{{ url('storage/' . $post->preview_image) }}" alt="preview_image" class="w-50">
                    </div>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="preview_image">
                            <label class="custom-file-label">Виберіть зображення</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Завантаження</span>
                        </div>
                    </div>
                    @error('preview_image')
                    <div class="text-danger">{{ $message }}</div>

                    @enderror
                </div>

                <div class="form-group w-50">
                    <label for="exampleInputFile">Додати зображення</label>
                    <div class="w-50 mb-2">
                        <img src="{{ url('storage/' . $post->main_image) }}" alt="main_image" class="w-50">
                    </div>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="main_image">
                            <label class="custom-file-label">Виберіть зображення</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Завантаження</span>
                        </div>
                    </div>
                    @error('main_image')
                    <div class="text-danger">{{ $message }}</div>

                    @enderror
                </div>

                <div class="form-group">
                    <label>Оберіть категорію</label>
                    <select name="category_id" class="form-control w-50">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == $post->category_id ? 'selected' : '' }}
                            >{{ $category->title }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="text-danger">{{ $message }}</div>

                    @enderror
                </div>

                <div class="form-group w-25">
                    <input type="submit" class="btn btn-block btn-success col-4" value="Оновити" >
                </div>
            </form>


          <!-- ./col -->

        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection
