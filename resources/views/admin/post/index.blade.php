 @extends('admin.layouts.main')
 @section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Новини</h1>
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
          <div class="col-2 mb-3">
            <a href="{{ route('admin.post.create') }}" class="btn btn-block btn-primary">Додати новини</a>
          </div>
        </div>
        <!-- Список категорий -->
        <div class="row">
          <div class="col-8">
          <div class="card">

            <!-- /.card-header -->
            <div class="card-body table-responsive p-0 ">
              <table class="table table-hover text-nowrap ">
                <thead>

                  <tr>
                    <th>ID</th>
                    <th>Назва Новини</th>
                    <th colspan="3" class="text-center">Дія</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($post as $post)


                  <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td><a href="{{ route('admin.post.show', $post->id) }}"><i class="far fa-eye"></i></a></td>
                    <td><a href="{{ route('admin.post.edit', $post->id) }}" class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
                    <td>
                        <form action="{{ route('admin.post.delete',$post->id ) }}" method="POST">
                    @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="fas fa-solid fa-trash text-danger" role="button"></i>
                            </button>
                        </form>
                    </td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>


          <!-- ./col -->

        </div>
        <!-- /.row -->
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection
