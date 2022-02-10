@extends('layouts.app')

@section('page-title')
    Comics
@endsection

@section('main_content')

    @include('components.jumbotron')

    <section class="comics">
        <div class="comics-top">
            <div class="sm-container">
                <div class="row">
                    {{-- col left --}}
                    <div class="col-left">
                        <h2></h2>
                        <div class="table-head">U.S. Price: <span>[price]</span> </div>
                        <p>[description]</p>
                    </div>
                    {{-- col right --}}
                    <div class="col-right">
                        <div class="image">
                            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="comics-bottom">
            <div class="sm-container">
                comics bottom
            </div>
        </div>
        
        
    </section>

    
@endsection