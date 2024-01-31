@extends('Layouts.main')

@section('title', 'dashboard')
<style>
.content-wrap .info-boxes {
  padding: 1em 15em 1em;
  align-items: center;
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
  grid-gap: 2em;
}
.content-wrap .info-boxes .info-box {
  background: #fff;
  height: 100px;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  padding: 0 3em;
  border: 3px solid #ede8f0;
  border-radius: 5px;
}

.content-wrap .info-boxes .info-box .box-icon svg {
  display: block;
  width: 48px;
  height: 48px;
}
.content-wrap .info-boxes .info-box .box-icon svg path,
.content-wrap .info-boxes .info-box .box-icon svg circle {
  fill: #99a0b0;
}
.content-wrap .info-boxes .info-box .box-content {
  padding-left: 1.25em;
  white-space: nowrap;
}
.content-wrap .info-boxes .info-box .box-content .big {
  display: block;
  font-size: 2em;
  line-height: 150%;
  color: #1b253d;
}
.content-wrap .info-boxes .info-box.active svg circle,
.content-wrap .info-boxes .info-box.active svg path {
  fill: #4b84fe;
}
{
	
}
</style>
    
@section('content')
<div class="section-title">
    <h2>Daeng Barbershop</h2>
  
	<main class="content-wrap p-center">
		<header class="content-head">
		</header>
		
		<div class="content ">
			<section class="info-boxes">
				<div class="info-box">
					<div class="box-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 10H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V11a1 1 0 0 0-1-1zm-1 10H5v-8h14v8zM5 6h14v2H5zM7 2h10v2H7z"/></svg>
					</div>
					
					<div class="box-content">
						<span class="big">Angka</span>
						Server
					</div>
				</div>
				
				<div class="info-box active">
					<div class="box-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3,21c0,0.553,0.448,1,1,1h16c0.553,0,1-0.447,1-1v-1c0-3.714-2.261-6.907-5.478-8.281C16.729,10.709,17.5,9.193,17.5,7.5 C17.5,4.468,15.032,2,12,2C8.967,2,6.5,4.468,6.5,7.5c0,1.693,0.771,3.209,1.978,4.219C5.261,13.093,3,16.287,3,20V21z M8.5,7.5 C8.5,5.57,10.07,4,12,4s3.5,1.57,3.5,3.5S13.93,11,12,11S8.5,9.43,8.5,7.5z M12,13c3.859,0,7,3.141,7,7H5C5,16.141,8.14,13,12,13z"/></svg>
					</div>
					
					<div class="box-content">
						<span class="big">Angka</span>
						Voucher
					</div>
				</div>
				


				
    </div>@endsection


