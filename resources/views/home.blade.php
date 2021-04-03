@extends ('master')
@section ('title','halaman Home')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<style>

    #profile
    {
        
        background-image : url(img/putih.png);
        background-size : cover;
        height: 350px;

    }
</style>
@section ('content')
    <di class="container">
    <section class="container" id="profile">
    <div class="row">
        <div class="col-md-5 text-center">
            <img class="rounded-circle img-thumbanail mt-3" widht="45%"  src="img/a.jpg">
            <h1> Farda Milanda Amin</h1>
            <h2> 1810530168</h2>
        </div>
    </div>
    </section>
</div>

<div class="container">
    <section class="my-6">
        <div class="row">
        <div class="col-md bg-info text-center">
        <h4>Pengalaman</h4>
        </div>

        <div class="col-md bg-info text-center">
        <h4>Pendidikan</h4>
        </div>
        <div class="col-md bg-info text-center">
        <h4>Kontak</h4>
        </div>

    </div>
    </div>
    </section>

<div class="container">
<div class="row">
    <div class="col-md bg-secondary text-justify text-dark">
    <p></P>
    <h5> 1. Pernah Menjadi Anggota Paskibra Lombok Barat Th.2016   </h5>
    <h5> 2. Pernah Menjadi Ketua UKM English Club </h5>
    <h5> </h5>

    </div>

    <div class="col-md bg-warning text-black">
    <P></p>
    <h5>-> 2006-2012 : SDIT Nurul Hidayah</h5>
    <h5>-> 2012-2015 : SMPN 5 Gerung</h5>
    <h5>-> 2015-2018 : SMAN 1 Gerung</h5>
    <h5>-> 2018-Sekarang : Universitas Bumigora</h5>
    </div>

     <div class="col-md bg-secondary text-justify text-dark">
           <p></p>
            <h5>-> No HP     : 085937048099</h5>
            <h5>-> E-Mail    : fardamilanda1405@gmail.com</h5>
            <h5>-> Facebook  : FardaMilanda</h5>
            <h5>-> Instagram : @farda.mn</h5>
    </div>

    

    <div class="container">
<div class="row">
    <div class="col-md bg-dark text-justify text-light">
    <h4><marquee><b>_____>Thanks For Coming | By : Farda Milanda Amin (1810530168)<_____</b> </marquee></h4>
    </div>
    </div>
</div>
<br><br><br><br>
@endsection