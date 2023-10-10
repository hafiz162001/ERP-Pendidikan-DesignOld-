$('#DTKota').DataTable({
    "processing": true,
    "serverside": true,
    "ajax": base_url + "dapur/kota/get",
    "language": {
        "emptyTable": "Data Kota tidak tersedia"
    }
});