@extends('layouts')
@section('content')
<section id="kontak" class="mt-5 py-5">
    <div class="container">
        <div class="py-5 col email">
            <h1 class="poppins-bold">Kontak Kami</h1>
            <div class="stripe"></div>
            <form action="mailto:info@karirdijepang.id" method="post" enctype="text/plain" class="mt-5">
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="string" class="form-control" name="name">
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <div class="flex-fill me-2">
                        <label class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="email">
                    </div>
                    <div class="flex-fill ms-2">
                        <label class="form-label">No Telephone / HP</label>
                        <input type="number" class="form-control" name="phone">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 100%"></textarea>
                </div>
                <button type="submit" class="btn mt-4">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection
