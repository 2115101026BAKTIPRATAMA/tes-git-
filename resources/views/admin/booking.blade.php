<!DOCTYPE html>
<html>
<title>Order</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://badoystudio.com/cloudme.fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

<!-- The Grid -->
<div class="w3-row-padding">

<!-- Left Column -->
<div class="w3-third">

<div class="w3-white w3-text-grey w3-card-4">
<div class="w3-display-container">
<div class="w3-display-bottomleft w3-container w3-text-black">
</div>
</div>
<div class="w3-container">
<p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Gianyar</p>
<p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>ex@mail.com</p>
<p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>1224435534</p>
<hr>

<p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Review</b></p>
<p>Show</p>
<div class="w3-light-grey w3-round-xlarge w3-small">
<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
</div>
<p>Photography</p>
<div class="w3-light-grey w3-round-xlarge w3-small">
<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
<div class="w3-center w3-text-white">80%</div>
</div>
</div>
<p>facility</p>
<div class="w3-light-grey w3-round-xlarge w3-small">
<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
</div>
<br>


<br>
</div>
</div><br>

<!-- End Left Column -->
</div>

<!-- Right Column -->
<div class="w3-twothird">

<div class="w3-container w3-card w3-white">
<h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Order Now</h2>
<div class="w3-container">
    <center><h2>Form Order</h2>
        <form action="/action_page.php">
            <label for="name">Nama</label><br>
            <input type="text" id="lname" name="lname" value=""><br>
            <label for="name">Alamat Rumah</label><br>
            <input type="text" id="alamat" name="alamat" value=""><br>
            <label for="name">No Telepon</label><br>
            <input type="text" id="notlpn" name="notlpn" value=""><br>
            <label for="name">Jumlah</label><br>
            <input type="number" id="child" name="total_children" placeholder="1" min="0" required value=""><br>
            <label for="name">Nama Produk</label><br>
            <select name="title" >
                  <option value="">Tambahkan</option>
                  @foreach($admin as $item) 
                    <option value="{{$item->jenis_olahan}}">{{$item->title}}</option>
                    @endforeach
                  </select>
        </form>
    </center>
    <br>
    <tr>
        <tr>
            <td><b>Metode Pembayaran</b></td>
            <td>:</td>
            <td>
                <input type="radio" name="pembayaran" value="tftbank" checked/> Transfer Bank 
                <input type="radio" name="pembayaran" value="cod" /> COD 
                <input type="radio" name="pembayaran" value="kredit" /> Kartu Kredit/Debit
                <input type="radio" name="pembayaran" value="bri" /> BRI Direct Debit
            </td>
    </tr>
    <center>
        <br>
        <td colspan="3" align="right"><input type="submit" value="Order"></td>
    </center>
    <br>
    <h5 class="w3-opacity"><b>Perhatikan:</b></h5>
    <ol>
        <li>Wajib pergi untuk 1st timer visit</li>
        <li>Harga IDR100,000</li>
        <li>Show sekitar 45 menit</li>
        <li>Dapat menonton show sambil melihat sunset</li>
        <li>Bawak mineral water</li>
        <li>Tempat duduk agak rendah dan untuk show yang 45 menit panjangnya akan mengakibatkan anda berasa kebas kaki</li>
    </ol>
    {{-- <button class="h-10 px-6 font-semibold rounded-full bg-violet-600 text-white" type="submit">
        Submit
    </button><br> --}}
<hr>
</div>
</div>

<!-- End Right Column -->
</div>

<!-- End Grid -->
</div>

<!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p>Support by <a href="https://www.tripadvisor.co.id/Attraction_Review-g297701-d2056776-Reviews-Kecak_Fire_Trance_Dance_Pura_Dalem_Taman_Kaja-Ubud_Gianyar_Regency_Bali.html" target="_blank">tripadvisor</a></p>
</footer>

</body>
</html>