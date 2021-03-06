@extends('layouts.app')
@section('header-content')
<li class="m-nav__item">
        <a href="" class="m-nav__link">
            <span class="m-nav__link-text">Zone Dateils</span>
        </a>
    </li>
    @endsection

@section('content')


		<!--begin::Portlet-->
        <div class="m-content">
               
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                   Zone Detail
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                <a href="{{route('zone.create')}}" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
                                        <span>
                                            <i class="la la-plus"></i>
                                            <span> Add New Zone</span>
                                        </span>
                                    </a>
                                </li>
                             
                            </ul>
                        </div>
                    </div>
                    <div class="m-portlet__body">

                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                            <thead>
                                <tr>
                                    <th>RNO</th>  
                                    <th>Country</th>                                  
                                    <th>State</th>                                
                                    <th>zone</th>                               
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>


                                    <?php $i=0;?>

                                     @foreach($zones as $zone)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$zone->country}}</td>
                                    <td>{{$zone->state}}</td>
                                    <td>{{$zone->name}}</td>
                                    
                                            <form action="{{ route ('zone.destroy',$zone->id ) }}}" method="POST"> 
                                                    {{ method_field('DELETE') }}  {{ csrf_field() }}
                           
                                      
                    <td >
                           <a href="{{ route('zone.edit',$zone->id ) }}" >
                    <i class="fa fa-edit"></i>
                         </a> 
                     
                    
                        <button type='submit' Onclick="return clickAlert()" class=""><i class="fa fa-trash-alt"></i>
                    </button>
                    </form>
                    
                                      </td>
                                </tr>
                                @endforeach
                           
                               
                              
                           
                            </tbody>
                        </table>
                    </div>
                </div>
               

                <!-- END EXAMPLE TABLE PORTLET-->
            </div>

        <!--end::Portlet-->
        <script>
                function clickAlert() {
                 var result = confirm("Are you sure want to Delete This User");
                  if(result ) 
                  { 
                   return true;
                  } 
                 else
                 {
                  return false;
                 }
              }
              </script>

@endsection


