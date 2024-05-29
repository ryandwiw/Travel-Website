<section>
        <div class="card bg-dark text-light fw-bold mobile-statistics-only card-noborder">
            <div class="card-body d-flex justify-content-around align-items-center ">
                <div class="text-center">
                    <i class="fas fa-users fa-2x"></i>
                    <div>Total Pengunjung</div>
                    <div class="text-warning fw-bolder mb-3" id="totalPengunjung">0</div>
                </div>
                <div class="text-center">
                    <i class="fas fa-cubes fa-2x"></i>
                    <div>Total Produk</div>
                    <div class="text-warning fw-bolder mb-3" id="totalProduk">0</div>
                </div>
                <div class="text-center">
                    <i class="fas fa-file-alt fa-2x"></i>
                    <div>Total Artikel</div>
                    <div class="text-warning fw-bolder mb-3" id="totalArtikel">0</div>
                </div>
            </div>
        </div>
</section>

<style>

    .card-noborder{
        border-radius: 0 !important;
    }

    @media(max-width:767px) {
        .mobile-statistics-only {
            font-size: 12px !important;
        }

        .mobile-statistics-only .card-body {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
        }

        .mobile-statistics-only .card-body > div {
            flex: 1;
        }
        .mobile-statistics-only .card {
            width: 100% !important; 
    }
}
</style>

<script>
    const maxPengunjung = 200;
        const maxProduk = 300;
        const maxArtikel = 400;

        let totalPengunjung = 0;
        let totalProduk = 0;
        let totalArtikel = 0;

        const updateTotals = () => {
            totalPengunjung = Math.min(totalPengunjung + Math.floor(Math.random() * 20) + 1, maxPengunjung);
            totalProduk = Math.min(totalProduk + Math.floor(Math.random() * 20) + 1, maxProduk);
            totalArtikel = Math.min(totalArtikel + Math.floor(Math.random() * 20) + 1, maxArtikel);

            document.getElementById('totalPengunjung').innerText = totalPengunjung;
            document.getElementById('totalProduk').innerText = totalProduk;
            document.getElementById('totalArtikel').innerText = totalArtikel;
        };

        setInterval(updateTotals, 100); // 100 milliseconds
</script>
</script>