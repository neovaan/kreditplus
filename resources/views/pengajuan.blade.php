<table class="table">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>KTP</th>
        <th>Telepon</th>
        <th>Email</th>
        <th>Brand</th>
        <th>Area</th>
        <th>Pesan</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $q)
            <tr>
                <td>{{$q->nama}}</td>
                <td>{{$q->alamat}}</td>
                <td>{{$q->ktp}}</td>
                <td>{{$q->telp}}</td>
                <td>{{$q->email}}</td>
                <td>{{$q->brand}}</td>
                <td>{{$q->area}}</td>
                <td>{{$q->pesan}}</td>
            </tr>
        @endforeach
    </tbody>
</table>