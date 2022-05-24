@if(session()->has('success'))
<div class="alert alert-success mt-2" role="alert">
    {{ session('success') }}
</div>
@elseif($errors->any())
<div class="alert alert-warning mt-2" role="alert">
    Masukkan Data dengan benar
</div>
@endif