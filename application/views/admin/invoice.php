<div class="container-fluid">
    <h4>Invoice </h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas tanggal pembayaran</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($invoice as $inv) : ?>
        <tr>
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->alamat ?></td>
            <td><?php echo $inv->tgl_pesan ?></td>
            <td><?php echo $inv->batas_bayar ?></td>
            <td><?php echo anchor('invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td colspan="4" align="right">Grand Total</td>
            <td align="right">Rp. <?php echo number_format($total) ?></td>
        </tr>
    </table>
</div>