<table class="table-bordered">
  <thead>
  <tr>
      <th>nama</th>
      <th>tgl</th>
      <th>judul</th>
      <th>isi</th>
  </tr>
  </thead>
  <tbody>
  @foreach($invoices as $invoice)
      <tr>
          <td>{{ $invoice->user->nama }}</td>
          <td>{{ $invoice->tgl_pengaduan }}</td>
          <td>{{ $invoice->judul_pengaduan }}</td>
          <td>{{ $invoice->isi_laporan }}</td>
      </tr>
  @endforeach
  </tbody>
</table>