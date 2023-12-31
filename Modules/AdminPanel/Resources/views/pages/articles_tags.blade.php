<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Nieuwe tags')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">            
  <!-- Page header -->
  <h1 class="h3 mb-2 text-gray-800 ml-0">Tags</h1>

  <div class="row">
    <!-- New tag -->
    <div class="col-4 rounded">
      <form>
        <p>Nieuwe tag toevoegen</p>
        <div class="form-group">
          <label for="tagsFormName">Naam</label>
          <input type="text" class="form-control" id="tagsFormName" placeholder="Hardware">
        </div>
        <div class="form-group">
          <label for="CategoryFormSlug">Slug</label>
          <input type="text" class="form-control" id="tagsFormSlug" placeholder="hardware-posts">
        </div>                            
        <div class="form-group">
          <label for="tagsFormDescription">Beschrijving</label>
          <textarea class="form-control" id="tagsFormDescription" rows="3"></textarea>
        </div>
      </form>
    </div>
    
    <!-- Tag table-->
    <div class="col-8 rounded mt-5">
      <!-- Table tags -->
      <table class="table mt-4">
        <thead class="thead">
          <tr>
            <th scope="col">
              <!-- Table controls -->
              <div class="row">
                <div class="col-3">
                  <div class="dropdown show">
                    <a class="btn btn btn-sm dropdown-toggle border bg-primary text-white mb-2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Bulk acties
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Verwijderen</a>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Top table -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Naam
                </label>
              </div>
            </th>
            <th scope="col">Beschrijving</th>
            <th scope="col">Slug</th>
            <th scope="col">Aantal artikelen</th>
          </tr>
        </thead>
        <tbody>
          <!-- Row 1 -->
          <tr>
            <th scope="row" class="w-25">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  <a href="#">Hardware</a> - <a href="#"><i class="fa fa-edit"></i></a>
                </label>
              </div>
            </th>
            <td><a href="#">Alle berichten over hardware</a></td>
            <td><a href="#">hardware</a></td>
            <td><a href="#">12</a></td>
          </tr>
          <!-- Row 2 -->
          <tr>
            <th scope="row" class="w-25">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  <a href="#">Hardware</a> - <a href="#"><i class="fa fa-edit"></i></a>
                </label>
              </div>
            </th>
            <td><a href="#">Alle berichten over hardware</a></td>
            <td><a href="#">hardware</a></td>
            <td><a href="#">12</a></td>
          </tr>
        </tbody>
      </table>
      <!-- End table article -->
    </div>
  </div>

  <button type="button" class="btn btn-primary btn-lg mb-4">Nieuwe tag toevoegen</button>

</div>
<!-- /.container-fluid -->

@stop