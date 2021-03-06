@if ($user_type=='mentor')

<div style="border:1px solid #005e9a; border-radius:10px">
	<div style="border:1px solid #005e9a; border-radius:5px; background:#005e9a; padding:15px; color:#ffffff; font-weight:bold; font-size:25px" align="center">
		MentorMarmara
	</div>
	<div style="padding:50px; color:#004068">
		
		Selam <b>{{$name}}</b>,<br /><br />
		Mentörlük başvurun kabul edildi! Artık sen de <i>CSE Club Mentörlük Proje</i>mizin bir parçasısın!<br /><br />
		<a href="http://www.mentormarmara.com/mentor">mentormarmara.com/mentor</a> adresi üzerinden sana özel açılan bu hesapla mentee kişisinden gelen bölüm hakkındaki sorulara müsait olduğun zaman yanıt verebilirsin. <b>Ancak</b> mentee'nden gelen herhangi bir dersin ödevini tümüyle çözdürme konusundaki talebine yanıt vermeme hakkını kullanabilir, ona o konu hakkında yardımcı olabilecek kaynakları paylaşabilirsin.<br /><br />
		Seninle eşleştirdiğimiz mentee veya mentee'leri, sisteme giriş yaptıktan sonra <b>Mentee'lerim</b> menüsünden öğrenebilirsin.<br /><br />
		Bunların haricinde sistem hakkında merak ettiğin her şeyi <a href="http://mentormarmara.com/contact.php">mentormarmara.com/contact.php</a> adresindeki formu kullanarak bize sorabilirsin.<br /><br />
		Hesap bilgilerin aşağıda! Bu bilgilerle hemen giriş yapıp sistemi kullanmaya başlayabilirsin:<br /><br />
		<div style="background:#F5F5F5; border-bottom:1px solid #C0C0C0; padding:15px; font-weight:bold; color:#111111">
			Hesap bilgilerin
		</div>
		<div style="border-left:2px solid #C0C0C0; padding:15px; color:#111111">
			<b>Sisteme giriş adresin:</b><br />
			<a href="http://www.mentormarmara.com/mentor">http://mentormarmara.com/mentor</a><br /><br />
			<b>Kullanıcı adın:</b><br />
			{{$username}}<br /><br />
			<b>Şifren:</b><br />
			{{$password}}<br /><br />
			<i><small>Şifreni sisteme ilk girişinde değiştirsen iyi olur. Bir de hiç kimseyle paylaşmamanı öneririz!</small></i><br /><br />
		</div><br /><br />
		Projeye katkıda bulunduğun için teşekkürler,<br />
		<b>CSE Club Yönetim Kurulu</b><br /><br />

	</div>
</div>

@else

<?php
	$mentor = DB::table('users')->where('id', $mentor_id)->first();
	$mentorName = $mentor->name . ' ' . $mentor->surname;
?>

<div style="border:1px solid #005e9a; border-radius:10px">
	<div style="border:1px solid #005e9a; border-radius:5px; background:#005e9a; padding:15px; color:#ffffff; font-weight:bold; font-size:25px" align="center">
		MentorMarmara
	</div>
	<div style="padding:50px; color:#004068">
		
		Selam <b>{{$name}}</b>,<br /><br />
		Mentee başvurun kabul edildi! Artık sen de <i>CSE Club Mentörlük Proje</i>mizin bir parçasısın!<br /><br />
		<a href="http://www.mentormarmara.com/mentor">mentormarmara.com/mentor</a> adresi üzerinden sana özel açılan bu hesapla mentörüne sorularını sorabilirsin. Soru içeriğinde mentörüne bölümünle ilgili her konu hakkında soru yönlendirebilirsin. <b>Ancak</b> herhangi bir dersinin ödevini tümüyle çözdürmeyi talep etmemeni rica ediyoruz. Mentörün bu soruların karşısında cevap vermeme hakkını kullanabilir. Ama ona ödevin için yararlanman gereken kaynaklar hakkında danışabilirsin.<br /><br />
		Seninle eşleştirdiğimiz mentörün <b>{{ $mentorName }}</b> hakkındaki tüm bilgileri, sisteme giriş yaptıktan sonra <b>Mentor'um</b> menüsünden öğrenebilirsin.<br /><br />
		Bunların haricinde sistem hakkında merak ettiğin her şeyi <a href="http://mentormarmara.com/contact.php">mentormarmara.com/contact.php</a> adresindeki formu kullanarak bize sorabilirsin.<br /><br />
		Hesap bilgilerin aşağıda! Bu bilgilerle hemen giriş yapıp sistemi kullanmaya başlayabilirsin:<br /><br />
		<div style="background:#F5F5F5; border-bottom:1px solid #C0C0C0; padding:15px; font-weight:bold; color:#111111">
			Hesap bilgilerin
		</div>
		<div style="border-left:2px solid #C0C0C0; padding:15px; color:#111111">
			<b>Sisteme giriş adresin:</b><br />
			<a href="http://www.mentormarmara.com/mentor">http://mentormarmara.com/mentor</a><br /><br />
			<b>Kullanıcı adın:</b><br />
			{{$username}}<br /><br />
			<b>Şifren:</b><br />
			{{$password}}<br /><br />
			<i><small>Şifreni sisteme ilk girişinde değiştirsen iyi olur. Bir de hiç kimseyle paylaşmamanı öneririz!</small></i><br /><br />
		</div><br /><br />
		Projeye katkıda bulunduğun için teşekkürler,<br />
		<b>CSE Club Yönetim Kurulu</b><br /><br />

	</div>
</div>

@endif