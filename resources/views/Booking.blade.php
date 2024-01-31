@extends('Layouts.main')

@section('title', 'Booking')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.flex {
  display: flex;
}

.flex-col {
  flex-direction: column;
}

.h-screen {
  height: 100vh;
}

.bg-gray-100 {
  background-color: #f5f5f5;
}

.dark-bg-gray-900 {
  /* Dark mode background color */
}

/* Header styles */
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 2rem;
  background-color: #fff;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}
.section-title {
            padding: 20px;
            background-color: #ffffff;
            /* margin-bottom: 20px; Adjust the margin as needed */
        }

.text-xl {
  font-size: 1.25rem;
}

.font-semibold {
  font-weight: 600;
}

/* Card styles */
.card {
  padding: 1rem;
  margin-bottom: 1rem;
  background-color: #fff;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

/* Button styles */
.button {
  display: inline-block;
  padding: 0.5rem 1rem;
  border: 1px solid #333;
  border-radius: 4px;
  text-decoration: none;
  color: #333;
  cursor: pointer;
}

.button:hover {
  background-color: #333;
  color: #fff;
}


.text-sm {
  font-size: 0.875rem;
}

.font-medium {
  font-weight: 500;
}

.hover-underline:hover {
  text-decoration: underline;
}
.modal-content {
  text-align: justify;
  
} 
.detailModal {
  border-top: 1px solid #e0e0e0;
    padding: 2em;
    pointer-events: all;
    overflow: auto;
}
.detailModal label {
    display: flex;
    justify-content: left;
    margin-bottom: 10px; /* Sesuaikan margin bawah sesuai kebutuhan Anda */
}

.detailModal label::after {
    content: ":";
    margin-left: 20px; /* Sesuaikan margin kiri sesuai kebutuhan Anda */
}


</style>
</head>



<body>
@section('content')
<section class="flex-1 overflow-auto p-6">
<div class="section-title">
    <h2>Booking</h2>
    </div>
      <div class="grid gap-4">
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-4" data-v0-t="card">
          <div class="flex flex-col space-y-1.5 p-6">
            <h3 class="text-2xl font-semibold leading-none tracking-tight">Booking ID #12345</h3>
            <p class="text-sm text-muted-foreground">John Doe - 15.00 - Sedang diproses</p> 
          </div>

          <div class="flex items-center p-6">
            <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Lihat Detail
            </button>
          </div>
        </div>
      </div>


      <section class="flex-1 overflow-auto p-6">
      <div class="section-title">
        <h2>Reservasi</h2>
        </div>
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-4" data-v0-t="card">
          <div class="flex flex-col space-y-1.5 p-6">
            <h3 class="text-2xl font-semibold leading-none tracking-tight">Reservasi #7890</h3>
            <p class="text-sm text-muted-foreground">Booking ID - 20 Januari 2024 - Aktif</p>
          </div>
          <div class="flex items-center p-6">
            <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
              Batalkan Reservasi
            </button>
          </div>
        </div>
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-4" data-v0-t="card">
          <div class="flex flex-col space-y-1.5 p-6">
            <h3 class="text-2xl font-semibold leading-none tracking-tight">Reservasi #7891</h3>
            <p class="text-sm text-muted-foreground">Booking ID  - 21 Januari 2024 - Dibatalkan</p>
          </div>
          <div class="flex items-center p-6">
            <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
              Batalkan Reservasi
            </button>
          </div>
        </div>
      </div>
      
    </section>
  </main>
</section>
{{-- !modal! --}}
<div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1>Booking </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="detailModal">
            <label for="modalHari">Hari</label><br>
            <label for="modalTanggal">Tanggal</label><br>
            <label for="modalTime">Pukul</label><br>
            <label for="modalOrigin">Kegiatan</label><br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary">Tolak</button>
          <button type="button" class="btn btn-primary">Terima</button>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
    
    @endsection


