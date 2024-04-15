@extends('layouts.app')

@section('content')

<div class="content-header">
  <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
          </div>
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">
                      <a href="#">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">
                      Asset
                  </li>
              </ol>
          </div>
      </div>
  </div>
</div>


<section class="content">
  <div class="container-fluid">
      <div class="row">      
          <div class="col-lg-12 mt-4">
              <div class="card">
                  <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nama Aset</th>
                        <th>Jenis Aset</th>
                        <th>Alamat</th>
                        <th>Details</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($assets as $asset)
                      <tr class="asset-row" data-asset-id="{{ $asset->id }}">
                        <td>{{ $asset->nama_aset }}</td>
                        <td>{{ $asset->jenis_aset }}</td>
                        <td>{{ $asset->alamat }}</td>
                        <td>
                          <a href="{{ route('asset.details', $asset->id) }}" class="btn btn-primary">Details</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
              </table>

                  </div>
              </div>
          </div>
          <!-- /.col -->
      </div>
      <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>


{{-- <div class="container mt-5">
  <h1>Dashboard</h1>
  <div class="table-responsive">
    <table class="table" id="asset-table">
      <thead>
        <tr>
          <th>Nama Aset</th>
          <th>Jenis Aset</th>
          <th>Alamat</th>
          <th>Details</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($assets as $asset)
        <tr class="asset-row" data-asset-id="{{ $asset->id }}">
          <td>{{ $asset->nama_aset }}</td>
          <td>{{ $asset->jenis_aset }}</td>
          <td>{{ $asset->alamat }}</td>
          <td>
            <a href="{{ route('asset.details', $asset->id) }}" class="btn btn-primary">Details</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div> --}}

@endsection

@push('scripts')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>

{{-- <script>
$(document).ready(function() {
  $('#asset-table').DataTable();

  $(document).on('click', '.btn-detail', function() {
    var assetId = $(this).data('asset-id');
    $.ajax({
      url: '/assets/' + assetId,
      method: 'GET',
      success: function(response) {
        var asset = response.data;
        var detailHtml = '<ul>';
        detailHtml += '<li><strong>ID:</strong> ' + asset.id + '</li>';
        detailHtml += '<li><strong>Nama Aset:</strong> ' + asset.nama_aset + '</li>';
        detailHtml += '<li><strong>Jenis Aset:</strong> ' + asset.jenis_aset + '</li>';
        detailHtml += '<li><strong>Wilayah:</strong> ' + asset.wilayah + '</li>'; 
        detailHtml += '<li><strong>Alamat:</strong> ' + asset.alamat + '</li>';
        detailHtml += '<li><strong>Kode Aset:</strong> ' + asset.kode_aset + '</li>';
        detailHtml += '</ul>';
        $('#assetDetailContent').html(detailHtml);
        let myModal = new Modal(document.getElementById('myModal'));
        myModal.show();
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
        // Handle errors appropriately, e.g., display an error message to the user
      }
    });
  });
});
</script> --}}
@endpush
