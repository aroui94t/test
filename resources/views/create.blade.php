@extends('master.app');



@section('content')

<div class="container"> 
    <div class="row">
     <div class="col col-offset-2">
          <div class="card card-primary"></div>
        <div class="card-header text-center"><h2>Form Contact</h2></div>
        <div class="card-body">


                    <form  action="" method="POST"> 
                    {!! Form::open(['method' => 'post']) !!}
                        <div class="form-group">
                            {!! Form::label('title_itm','Title:') !!}
                        <!--<label for="title">Title:</label>-->
                            {!! Form::text('title',null,['placeholder' =>'Enter The Title','class' =>'form-control']) !!}
                                <!--<input type="text" class="form-control">-->
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('sub-title_itm','Sub-Title:') !!}
                            {!! Form::text('sub-title',null,['placeholder' =>'Enter The Sub title','class' =>'form-control']) !!}
                            <!--<label for="title">Sub-Title:</label>-->
                            <!--<input type="text" class="form-control">-->
                        </div>
                        
                        <div class="form-group">
                            <label for="title">Description:</label>
                                    <textarea class="form-control"  ></textarea>
                        </div>
                        <div class="text center">
                                <button class="btn btn-primary">Store</button>
                        </div>
                           
                        
                    </form>  
                {!! Form::close() !!}

        </div>
    </div>  
        </div>
    </div>       
    
</div>
@endsection
