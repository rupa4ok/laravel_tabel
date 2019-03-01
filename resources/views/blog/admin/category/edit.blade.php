@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('blog.admin.categories.update', $item->id) }}" method="post">
            @method('PATCH')
            @csrf
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @include ('blog.admin.category.includes.item_edit_main_col')
                    </div>
                    <div class="col-md-4">
                        @include ('blog.admin.category.includes.item_edit_add_col')
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
