@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <form action="/admin/thong-ke" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <select class="form-control mt-1" name="so_luong">
                                <option value="5"  {{ isset($so_luong) ? $so_luong == 5 ? "selected" : "" : "selected" }}>5 Sản Phẩm</option>
                                <option value="10" {{ isset($so_luong) ? $so_luong == 10 ? "selected" : "" : "" }}>10 Sản Phẩm</option>
                            </select>
                        </div>
                        <div class="col-md-4 mt-1">
                            <button class="btn btn-primary" type="submit">Chọn</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
var lables =  <?php echo json_encode($array_lable); ?>;
var datas  = <?php echo json_encode($array_datas); ?>;
const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'polarArea',
  data: {
    labels: lables,
    datasets: [{
      label: '# of Votes',
      data: datas,
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
</script>
@endsection

