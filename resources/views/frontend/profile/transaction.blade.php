@extends('layouts.app')

@section('home_content')

<section class="page-header">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-header-content">
                    <h1>Transactions</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            <li class="breadcrumb-item"><a href="{{route('regular_user_logout')}}">Logout</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-wrapper edutim-course-single">
    <div class="container-fluid">
        <div class="row">
            @include('frontend/profile/profile_card/profile_card')
            <div class="col-lg-8">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <h2 class="card-title text-white">Transactions</h2>
                    </div>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Sr.No</th>
                            <th scope="col">Type</th>
                            <th scope="col">Amount(TK)</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Cash Back </td>
                            <td>200</td>
                            <td>{{ $user->created_at->format('d-m-y') }}</td>
                            
                            <td>Accepted</td>
                          </tr>
                          {{-- <tr>
                            <th scope="row">2</th>
                            <td>Home Work </td>
                            <td>5</td>
                            <td>11 Feb 2024</td>
                            <td>Accepted</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Home Work </td>
                            <td>5</td>
                            <td>14 Feb 2024</td>
                            <td>Accepted</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td >Home Work </td>
                            <td>0</td>
                            <td>16 Feb 2024</td>
                            <td>Rejected</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Home Work </td>
                            <td>5</td>
                            <td>17 Feb 2024</td>
                            <td>Accepted</td>
                          </tr> --}}
                         
                          
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

