select br.kategori_id, br.nama, stn.nama, qty, harga, qty*harga as total 
from transaksi as tr
inner join barang as br 
on tr.id_transaksi=br.id_barang 
inner join satuan as stn 
on br.id_barang=stn.id_satuan
