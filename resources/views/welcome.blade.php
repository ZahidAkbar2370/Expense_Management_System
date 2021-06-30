@extends('layouts.app')

@section('content')
<div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                   <div class="col-sm-6">
                      
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a><i class="fa"></i></a></li>
                                <li><h4>Zahid Akbar Jakhar</h4></li>
                                <li><a><i class="fa"></i>  </a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="{{url('login')}}" target="_blank"><i class="fa fa-sing-in"></i>Login</a></li>

                                <li><a href="{{url('register')}}" target="_blank"><i class="fa fa-sing-in"></i>Register</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>
                            <h1>Welcome To Expense Management System</h1>
                    </center>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="homePageWallpaper/wallPaper.png" width="100%" height="100%">
                </div>
            </div>
        </div>

        @endsection