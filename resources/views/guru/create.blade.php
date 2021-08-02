@extends('template.template')
@section('title')

@section('content')
<div class="example-modal">
    <div class="modal modal-primary">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center">Tambah Data Guru</h4>
                </div>
                <form method="post" action="{{ url('/guru') }}">
                    @csrf
                    <div class="modal-body">
 
                        <div class="form-group @error('nip') has-error @enderror">
                            <label for="inputNip">NIP</label>
                            <input type="text" name="nip" class="form-control" value="{{old('nim')}}" id="inputNip" placeholder="Masukan Nip">
                            @error('nip')
                                    <span class="has-error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group @error('nama') has-error @enderror">
                            <label for="inputNama">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{old('nama')}}" id="inputNama" placeholder="Masukan Nama">
                            @error('nama')
                                    <span class="has-error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group @error('email') has-error @enderror">
                            <label for="inputEmail">Email</label>
                            <input type="email" name="email" class="form-control" value="{{old('email')}}" id="inputEmail" placeholder="Masukan Email">
                            @error('email')
                                    <span class="has-error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group @error('mapel') has-error @enderror">
                        <label>Jurusan</label>
                        <select class="form-control" name="mapel">
                            <option value="Matematika">Matematika</option>
                            <option value="Fisika">Fisika</option>
                            <option value="Biologi">Biologi</option>
                            <option value="Kimia">Kimia</option>
                            <option value="Sejarah">Sejarah</option>
                            <option value="Geografi">Geografi</option>
                            <option value="Sosiologi">Sosiologi</option>
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                        </select>
                        @error('mapel')
                                    <span class="has-error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-outline">Tambah Data</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- /.example-modal -->
@endsection

