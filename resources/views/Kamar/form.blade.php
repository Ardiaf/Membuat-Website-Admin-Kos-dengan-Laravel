<body>
<!--isi-->
    <div class="container">
    <div class="row"></div>
        <div class="row"></div>
            <div class='form-group'>
                <label for='Nomor_Kamar'>Nomor Kamar</label>
                <input type='text' name = "Nomor_Kamar" class = 'form-control' value="{{ old('Nomor_Kamar') ?? $kamars->Nomor_Kamar}}">
                <div>{{ $errors->first('Nomor_Kamar')}}</div>
            </div>
            
            <div class='form-group'>
                <label for='Kapasitas'>Kapasitas</label>
                <input type='text' name = "Kapasitas" class = 'form-control' value="{{ old('Kapasitas') ?? $kamars->Kapasitas}}">
                <div>{{ $errors->first('Kapasitas')}}</div>
            </div>

            <div class='form-group'>
                <label for='Hargaa_Per_Bulan'>Harga</label>
                <input type='text' name = "Harga_Per_Bulan" class = 'form-control' value="{{ old('Harga_Per_Bulan') ?? $kamars->Harga_Per_Bulan}}">
                <div>{{ $errors->first('Harga_Per_Bulan')}}</div>
            </div>

            <div class='form-group'>
                <label for='Status'>Status</label>
                <input type='text' name = "Status" class = 'form-control' value="{{ old('Status') ?? $kamars->Status}}">
                <div>{{ $errors->first('Status')}}</div>
            </div>
        @csrf
    </div>
<!--end isi-->

  </body>

