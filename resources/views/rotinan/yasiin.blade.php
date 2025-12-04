@extends('layouts.app')

@section('content')

<link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">

<style>
  body {
    font-family: 'Inter', sans-serif;
    background: #fafafa;
    color: #222;
    line-height: 1.9;
  }

  .wrap-yasin {
    padding: 40px 12%;
  }

  h1 {
    text-align: center;
    margin-bottom: 40px;
    color: #166534;
    font-weight: 600;
  }

  .ayat {
    margin-bottom: 35px;
    padding-bottom: 20px;
    border-bottom: 1px solid #ddd;
  }

  .arab {
    font-family: 'Scheherazade New', serif;
    font-size: 38px;
    direction: rtl;
    text-align: right;
    color: #111;
  }

  .latin {
    font-style: italic;
    font-size: 16px;
    color: #444;
    margin-top: 8px;
  }

  .terjemahan {
    font-size: 17px;
    margin-top: 6px;
    color: #333;
  }

  .nomor {
    display: inline-block;
    background: #16a34a;
    color: white;
    border-radius: 50%;
    width: 28px;
    height: 28px;
    text-align: center;
    line-height: 28px;
    margin-left: 10px;
    font-size: 14px;
  }
</style>

<div class="wrap-yasin">
<div class="source-link">
  Sumber : 
  <a href="https://quran.nu.or.id/yasin" target="_blank">
    https://quran.nu.or.id/yasin
  </a>
</div>

<h1>سُورَةُ یس</h1>
<div class="ayat">
    <div class="arab">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ </div>
    <div class="latin">bismillāhir-raḥmānir-raḥīm</div>
    <div class="terjemahan">Dengan nama Allah Yang Maha Pengasih, Maha Penyayang</div>
  </div>

  <div class="ayat">
    <div class="arab">يس <span class="nomor">١</span></div>
    <div class="latin">yâ sîn</div>
    <div class="terjemahan">Ya Sin</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَالْقُرْآنِ الْحَكِيمِ <span class="nomor">٢</span></div>
    <div class="latin">Wal-Qur-aanil-Hakeem</div>
    <div class="terjemahan">Demi Al-Qur'an yang penuh hikmah,</div>
  </div>
  
  <div class="ayat">
    <div class="arab">إِنَّكَ لَمِنَ الْمُرْسَلِينَ <span class="nomor">٣</span></div>
    <div class="latin">Innaka laminal mursaleen</div>
    <div class="terjemahan">sungguh, engkau (Muhammad) adalah salah seorang dari rasul-rasul,</div>
  </div>
  
  <div class="ayat">
    <div class="arab">عَلَىٰ صِرَاطٍ مُّسْتَقِيمٍ <span class="nomor">٤</span></div>
    <div class="latin">'Alaa Siraatim Mustaqeem</div>
    <div class="terjemahan">(yang berada) di atas jalan yang lurus,</div>
  </div>
  
  <div class="ayat">
    <div class="arab">تَنزِيلَ الْعَزِيزِ الرَّحِيمِ <span class="nomor">٥</span></div>
    <div class="latin">Tanzeelal 'Azeezir Raheem</div>
    <div class="terjemahan">(sebagai wahyu) yang diturunkan oleh (Allah) Yang Mahaperkasa, Maha Penyayang,</div>
  </div>
  
  <div class="ayat">
    <div class="arab">لِتُنذِرَ قَوْمًا مَّا أُنذِرَ آبَاؤُهُمْ فَهُمْ غَافِلُونَ <span class="nomor">٦</span></div>
    <div class="latin">Litunzira qawmam maaa unzira aabaaa'uhum fahum ghaafiloon</div>
    <div class="terjemahan">agar engkau memberi peringatan kepada suatu kaum yang nenek moyangnya belum pernah diberi peringatan, karena itu mereka lalai.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">لَقَدْ حَقَّ الْقَوْلُ عَلَىٰ أَكْثَرِهِمْ فَهُمْ لَا يُؤْمِنُونَ <span class="nomor">٧</span></div>
    <div class="latin">Laqad haqqal qawlu 'alaaa aksarihim fahum laa yu'minoon</div>
    <div class="terjemahan">Sungguh, pasti berlaku perkataan (hukuman) terhadap kebanyakan mereka, karena mereka tidak beriman.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">إِنَّا جَعَلْنَا فِي أَعْنَاقِهِمْ أَغْلَالًا فَهِيَ إِلَى الْأَذْقَانِ فَهُم مُّقْمَحُونَ <span class="nomor">٨</span></div>
    <div class="latin">Innaa ja'alnaa feee a'naaqihim aghlaalan fahiya ilal azqaani fahum muqmahoon</div>
    <div class="terjemahan">Sungguh, Kami telah memasang belenggu di leher mereka, lalu tangan mereka (diangkat) ke dagu, karena itu mereka tertengadah.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَجَعَلْنَا مِن بَيْنِ أَيْدِيهِمْ سَدًّا وَمِنْ خَلْفِهِمْ سَدًّا فَأَغْشَيْنَاهُمْ فَهُمْ لَا يُبْصِرُونَ <span class="nomor">٩</span></div>
    <div class="latin">Wa ja'alnaa mim baini aydeehim saddanw-wa min khalfihim saddan fa aghshai naahum fahum laa yubsiroon</div>
    <div class="terjemahan">Dan Kami jadikan di hadapan mereka sekat (dinding) dan di belakang mereka juga sekat, dan Kami tutup (mata) mereka sehingga mereka tidak dapat melihat.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَسَوَاءٌ عَلَيْهِمْ أَأَنذَرْتَهُمْ أَمْ لَمْ تُنذِرْهُمْ لَا يُؤْمِنُونَ <span class="nomor">١٠</span></div>
    <div class="latin">Wa sawaaa'un 'alaihim 'a-anzartahum am lam tunzirhum laa yu'minoon</div>
    <div class="terjemahan">Dan sama saja bagi mereka, apakah engkau memberi peringatan kepada mereka atau engkau tidak memberi peringatan kepada mereka, mereka tidak akan beriman juga.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">إِنَّمَا تُنذِرُ مَنِ اتَّبَعَ الذِّكْرَ وَخَشِيَ الرَّحْمَٰنَ بِالْغَيْبِ ۖ فَبَشِّرْهُ بِمَغْفِرَةٍ وَأَجْرٍ كَرِيمٍ <span class="nomor">١١</span></div>
    <div class="latin">Innamaa tunziru manit taba 'az-Zikra wa khashiyar Rahmaana bilghaib, fabashshirhu bimaghfiratinw-wa ajrin kareem</div>
    <div class="terjemahan">Sesungguhnya engkau hanya memberi peringatan kepada orang-orang yang mau mengikuti peringatan dan yang takut kepada Tuhan Yang Maha Pengasih, walaupun mereka tidak melihat-Nya. Maka berilah mereka kabar gembira dengan ampunan dan pahala yang mulia.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">إِنَّا نَحْنُ نُحْيِي الْمَوْتَىٰ وَنَكْتُبُ مَا قَدَّمُوا وَآثَارَهُمْ ۚ وَكُلَّ شَيْءٍ أَحْصَيْنَاهُ فِي إِمَامٍ مُّبِينٍ <span class="nomor">١٢</span></div>
    <div class="latin">Innaa Nahnu nuhyil mawtaa wa naktubu maa qaddamoo wa aasaarahum; wa kulla shai'in ahsainaahu feee Imaamim Mubeen</div>
    <div class="terjemahan">Sungguh, Kamilah yang menghidupkan orang-orang yang mati, dan Kamilah yang mencatat apa yang telah mereka kerjakan dan bekas-bekas yang mereka (tinggalkan). Dan segala sesuatu Kami kumpulkan dalam Kitab yang jelas (Lauh Mahfuzh).</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَاضْرِبْ لَهُم مَّثَلًا أَصْحَابَ الْقَرْيَةِ إِذْ جَاءَهَا الْمُرْسَلُونَ <span class="nomor">١٣</span></div>
    <div class="latin">Wadrib lahum masalan Ashaabal Qaryatih; iz jaaa'ahal mursaloon</div>
    <div class="terjemahan">Dan buatlah suatu perumpamaan bagi mereka, yaitu penduduk suatu negeri, ketika utusan-utusan datang kepada mereka;</div>
  </div>
  
  <div class="ayat">
    <div class="arab">إِذْ أَرْسَلْنَا إِلَيْهِمُ اثْنَيْنِ فَكَذَّبُوهُمَا فَعَزَّزْنَا بِثَالِثٍ فَقَالُوا إِنَّا إِلَيْكُم مُّرْسَلُونَ <span class="nomor">١٤</span></div>
    <div class="latin">Iz arsalnaaa ilaihimusnaini fakazzaboohumaa fa'azzaznaa bisaalisin faqaalooo innaaa ilaikum mursaloon</div>
    <div class="terjemahan">(yaitu) ketika Kami mengutus kepada mereka dua orang utusan, lalu mereka mendustakan keduanya; kemudian Kami kuatkan dengan (utusan) yang ketiga, maka ketiga (utusan itu) berkata, “Sungguh, kami adalah orang-orang yang diutus kepadamu.”</div>
  </div>
  
  <div class="ayat">
    <div class="arab">قَالُوا مَا أَنتُمْ إِلَّا بَشَرٌ مِّثْلُنَا وَمَا أَنزَلَ الرَّحْمَٰنُ مِن شَيْءٍ إِنْ أَنتُمْ إِلَّا تَكْذِبُونَ <span class="nomor">١٥</span></div>
    <div class="latin">Qaaloo maaa antum illaa basharum mislunaa wa maaa anzalar Rahmaanu min shai'in in antum illaa takziboon</div>
    <div class="terjemahan">Mereka (penduduk negeri) menjawab, “Kamu ini hanyalah manusia seperti kami, dan (Allah) Yang Maha Pengasih tidak menurunkan sesuatu apa pun; kamu hanyalah pendusta belaka.”</div>
  </div>
  
  <div class="ayat">
    <div class="arab">قَالُوا رَبُّنَا يَعْلَمُ إِنَّا إِلَيْكُمْ لَمُرْسَلُونَ <span class="nomor">١٦</span></div>
    <div class="latin">Qaaloo Rabbunaa ya'lamu innaaa ilaikum lamursaloon</div>
    <div class="terjemahan">Mereka berkata, “Tuhan kami mengetahui sesungguhnya kami adalah utusan-utusan(-Nya) kepada kamu.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَمَا عَلَيْنَا إِلَّا الْبَلَاغُ الْمُبِينُ <span class="nomor">١٧</span></div>
    <div class="latin">Wa maa 'alainaaa illal balaaghul mubeen</div>
    <div class="terjemahan">Dan kewajiban kami hanyalah menyampaikan (perintah Allah) dengan jelas.”</div>
  </div>
  
  <div class="ayat">
    <div class="arab">قَالُوا إِنَّا تَطَيَّرْنَا بِكُمْ ۖ لَئِن لَّمْ تَنتَهُوا لَنَرْجُمَنَّكُمْ وَلَيَمَسَّنَّكُم مِّنَّا عَذَابٌ أَلِيمٌ <span class="nomor">١٨</span></div>
    <div class="latin">Qaaloo innaa tataiyarnaa bikum la'il-lam tantahoo lanar jumannakum wa la-yamassan nakum minnaa 'azaabun aleem</div>
    <div class="terjemahan">Mereka menjawab, “Sesungguhnya kami bernasib malang karena kamu. Sungguh, jika kamu tidak berhenti (menyeru kami), niscaya kami rajam kamu dan kamu pasti akan merasakan siksaan yang pedih dari kami.”</div>
  </div>
  
  <div class="ayat">
    <div class="arab">قَالُوا طَائِرُكُم مَّعَكُمْ ۚ أَئِن ذُكِّرْتُم ۚ بَلْ أَنتُمْ قَوْمٌ مُّسْرِفُونَ <span class="nomor">١٩</span></div>
    <div class="latin">Qaaloo taaa'irukum ma'akum; a'in zukkirtum; bal antum qawmum musrifoon</div>
    <div class="terjemahan">Mereka (utusan-utusan) itu berkata, “Kemalangan kamu itu adalah karena kamu sendiri. Apakah karena kamu diberi peringatan? Sebenarnya kamu adalah kaum yang melampaui batas.”</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَجَاءَ مِنْ أَقْصَى الْمَدِينَةِ رَجُلٌ يَسْعَىٰ قَالَ يَا قَوْمِ اتَّبِعُوا الْمُرْسَلِينَ <span class="nomor">٢٠</span></div>
    <div class="latin">Wa jaaa'a min aqsal madeenati rajuluny yas'aa qaala yaa qawmit tabi'ul mursaleen</div>
    <div class="terjemahan">Dan datanglah dari ujung kota, seorang laki-laki dengan bergegas dia berkata, “Wahai kaumku! Ikutilah utusan-utusan itu.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">اتَّبِعُوا مَن لَّا يَسْأَلُكُمْ أَجْرًا وَهُم مُّهْتَدُونَ <span class="nomor">٢١</span></div>
    <div class="latin">Ittabi'oo mal-laa yas'alukum ajranw-wa hum muhtadoon</div>
    <div class="terjemahan">Ikutilah orang yang tidak meminta imbalan kepadamu; dan mereka adalah orang-orang yang mendapat petunjuk.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَمَا لِيَ لَا أَعْبُدُ الَّذِي فَطَرَنِي وَإِلَيْهِ تُرْجَعُونَ <span class="nomor">٢٢</span></div>
    <div class="latin">Wa maa liya laaa a'budul lazee fataranee wa ilaihi turja'oon</div>
    <div class="terjemahan">Dan tidak ada alasan bagiku untuk tidak menyembah (Allah) yang telah menciptakanku dan hanya kepada-Nyalah kamu akan dikembalikan.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">أَأَتَّخِذُ مِن دُونِهِ آلِهَةً إِن يُرِدْنِ الرَّحْمَٰنُ بِضُرٍّ لَّا تُغْنِ عَنِّي شَفَاعَتُهُمْ شَيْئًا وَلَا يُنقِذُونِ <span class="nomor">٢٣</span></div>
    <div class="latin">'A-attakhizu min dooniheee aalihatan iny-yuridnir Rahmaanu bidurril-laa tughni 'annee shafaa 'atuhum shai 'anw-wa laa yunqizoon</div>
    <div class="terjemahan">Mengapa aku akan menyembah tuhan-tuhan selain-Nya? Jika (Allah) Yang Maha Pengasih menghendaki bencana terhadapku, pasti pertolongan mereka tidak berguna sama sekali bagi diriku dan mereka (juga) tidak dapat menyelamatkanku.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">إِنِّي إِذًا لَّفِي ضَلَالٍ مُّبِينٍ <span class="nomor">٢٤</span></div>
    <div class="latin">Inneee izal-lafee dalaa-lim-mubeen</div>
    <div class="terjemahan">Sesungguhnya jika aku (berbuat) begitu, pasti aku berada dalam kesesatan yang nyata.</div>
  </div>
  
  <!-- AYAT 25 -->
<div class="ayat">
  <div class="arab">إِنِّي آمَنتُ بِرَبِّكُمْ فَاسْمَعُونِ <span class="nomor">٢٥</span></div>
  <div class="latin">Innī āmantu birabbikum fasma‘ūn</div>
  <div class="terjemahan">Sesungguhnya aku beriman kepada Tuhanmu, maka dengarkanlah (pengakuanku).</div>
</div>

<!-- AYAT 26 -->
<div class="ayat">
  <div class="arab">قِيلَ ادْخُلِ الْجَنَّةَ ۖ قَالَ يَا لَيْتَ قَوْمِي يَعْلَمُونَ <span class="nomor">٢٦</span></div>
  <div class="latin">Qīla udkhuli l-jannata qāla yā laitā qawmī ya‘lamūn</div>
  <div class="terjemahan">Dikatakan (kepadanya), “Masuklah ke dalam surga.” Dia berkata, “Alangkah baiknya sekiranya kaumku mengetahui...”</div>
</div>

<!-- AYAT 27 -->
<div class="ayat">
  <div class="arab">بِمَا غَفَرَ لِي رَبِّي وَجَعَلَنِي مِنَ الْمُكْرَمِينَ <span class="nomor">٢٧</span></div>
  <div class="latin">Bimā ghafara lī rabbī waja‘alanī minal-mukramīn</div>
  <div class="terjemahan">Tentang apa yang telah diberikan Tuhanku kepadaku dan dijadikannya aku termasuk orang-orang yang dimuliakan.</div>
</div>

<!-- AYAT 28 -->
<div class="ayat">
  <div class="arab">وَمَا أَنْزَلْنَا عَلَىٰ قَوْمِهِ مِنْ بَعْدِهِ مِنْ جُنْدٍ مِنَ السَّمَاءِ وَمَا كُنَّا مُنْزِلِينَ <span class="nomor">٢٨</span></div>
  <div class="latin">Wa mā anzalnā ‘alā qawmihi min ba‘dihi min jundin minas-samā’i wa mā kunnā munzilīn</div>
  <div class="terjemahan">Dan Kami tidak menurunkan kepada kaumnya setelah dia (meninggal) suatu pasukan dari langit, dan tidaklah Kami akan menurunkannya.</div>
</div>

<!-- AYAT 29 -->
<div class="ayat">
  <div class="arab">إِنْ كَانَتْ إِلَّا صَيْحَةً وَاحِدَةً فَإِذَا هُمْ خَامِدُونَ <span class="nomor">٢٩</span></div>
  <div class="latin">In kānat illā ṣayḥatan wāḥidatan fa-idzā hum khāmidūn</div>
  <div class="terjemahan">Tidak ada (azab itu) melainkan satu teriakan saja, maka tiba-tiba mereka semuanya mati.</div>
</div>

<!-- AYAT 30 -->
<div class="ayat">
  <div class="arab">يَا حَسْرَةً عَلَى الْعِبَادِ ۚ مَا يَأْتِيهِمْ مِنْ رَسُولٍ إِلَّا كَانُوا بِهِ يَسْتَهْزِئُونَ <span class="nomor">٣٠</span></div>
  <div class="latin">Yā ḥasratan ‘alal-‘ibād, mā ya'tīhim mir-rasūlin illā kānū bihī yastahzi’ūn</div>
  <div class="terjemahan">Alangkah besar penyesalan terhadap hamba-hamba itu. Tidak datang seorang rasul pun kepada mereka melainkan mereka selalu memperolok-olokkannya.</div>
</div>

<!-- AYAT 31 -->
<div class="ayat">
  <div class="arab">أَلَمْ يَرَوْا كَمْ أَهْلَكْنَا قَبْلَهُمْ مِنَ الْقُرُونِ أَنَّهُمْ إِلَيْهِمْ لَا يَرْجِعُونَ <span class="nomor">٣١</span></div>
  <div class="latin">Alam yaraw kam ahlaknā qablahum minal-qurūni annahum ilaihim lā yarji‘ūn</div>
  <div class="terjemahan">Tidakkah mereka mengetahui berapa banyak umat sebelum mereka yang telah Kami binasakan, bahwa orang-orang itu tidak akan kembali lagi kepada mereka?</div>
</div>

<!-- AYAT 32 -->
<div class="ayat">
  <div class="arab">وَإِنْ كُلٌّ لَمَّا جَمِيعٌ لَدَيْنَا مُحْضَرُونَ <span class="nomor">٣٢</span></div>
  <div class="latin">Wa in kullun lammā jamī‘un ladainā muḥḍarūn</div>
  <div class="terjemahan">Dan setiap mereka semuanya benar-benar akan dihadirkan kepada Kami.</div>
</div>

<!-- AYAT 33 -->
<div class="ayat">
  <div class="arab">وَآيَةٌ لَهُمُ الْأَرْضُ الْمَيْتَةُ ۖ أَحْيَيْنَاهَا وَأَخْرَجْنَا مِنْهَا حَبًّا فَمِنْهُ يَأْكُلُونَ <span class="nomor">٣٣</span></div>
  <div class="latin">Wa āyatul lahumul-arḍul-maitah, aḥyaināhā wa akhrajnā minhā ḥabban faminhū ya'kulūn</div>
  <div class="terjemahan">Dan suatu tanda bagi mereka adalah bumi yang mati. Kami menghidupkannya dan mengeluarkan darinya biji-bijian, maka dari itulah mereka makan.</div>
</div>

<!-- AYAT 34 -->
<div class="ayat">
  <div class="arab">وَجَعَلْنَا فِيهَا جَنَّاتٍ مِنْ نَخِيلٍ وَأَعْنَابٍ وَفَجَّرْنَا فِيهَا مِنَ الْعُيُونِ <span class="nomor">٣٤</span></div>
  <div class="latin">Wa ja‘alnā fīhā jannātim min nakhīlin wa a‘nābin wa fajjarnā fīhā minal-‘uyūn</div>
  <div class="terjemahan">Dan Kami jadikan padanya kebun-kebun kurma dan anggur dan Kami pancarkan padanya beberapa mata air.</div>
</div>

<!-- AYAT 35 -->
<div class="ayat">
  <div class="arab">لِيَأْكُلُوا مِنْ ثَمَرِهِ وَمَا عَمِلَتْهُ أَيْدِيهِمْ ۖ أَفَلَا يَشْكُرُونَ <span class="nomor">٣٥</span></div>
  <div class="latin">Liya'kulū min tsamarihi wa mā ‘amilat-hu aidīhim, afalā yasykurūn</div>
  <div class="terjemahan">Agar mereka makan dari buahnya, dan dari apa yang diusahakan oleh tangan mereka. Maka mengapa mereka tidak bersyukur?</div>
</div>
<!-- AYAT 36 -->
<div class="ayat">
  <div class="arab">سُبْحَانَ الَّذِي خَلَقَ الْأَزْوَاجَ كُلَّهَا مِمَّا تُنْبِتُ الْأَرْضُ وَمِنْ أَنْفُسِهِمْ وَمِمَّا لَا يَعْلَمُونَ <span class="nomor">٣٦</span></div>
  <div class="latin">Subḥānal-ladzī khalaqal-azwāja kullahā mimmā tunbitul-arḍu wa min anfusihim wa mimmā lā ya‘lamūn</div>
  <div class="terjemahan">Maha suci Tuhan yang telah menciptakan pasangan-pasangan semuanya, baik dari apa yang ditumbuhkan oleh bumi, dari diri mereka, maupun dari apa yang tidak mereka ketahui.</div>
</div>

<!-- AYAT 37 -->
<div class="ayat">
  <div class="arab">وَآيَةٌ لَهُمُ اللَّيْلُ ۖ نَسْلَخُ مِنْهُ النَّهَارَ فَإِذَا هُمْ مُظْلِمُونَ <span class="nomor">٣٧</span></div>
  <div class="latin">Wa āyatul lahumul-lail, naslakhu minhun-nahāra fa-idzā hum muẓlimūn</div>
  <div class="terjemahan">Dan suatu tanda bagi mereka adalah malam; Kami tanggalkan siang dari malam itu, maka seketika itu mereka berada dalam kegelapan.</div>
</div>

<!-- AYAT 38 -->
<div class="ayat">
  <div class="arab">وَالشَّمْسُ تَجْرِي لِمُسْتَقَرٍّ لَهَا ۚ ذَٰلِكَ تَقْدِيرُ الْعَزِيزِ الْعَلِيمِ <span class="nomor">٣٨</span></div>
  <div class="latin">Wasysyamsu tajrī limustaqarril lahā, dzālika taqdīrul-‘azīzil-‘alīm</div>
  <div class="terjemahan">Dan matahari berjalan di tempat peredarannya. Itulah ketetapan Yang Maha Perkasa lagi Maha Mengetahui.</div>
</div>

<!-- AYAT 39 -->
<div class="ayat">
  <div class="arab">وَالْقَمَرَ قَدَّرْنَاهُ مَنَازِلَ حَتَّىٰ عَادَ كَالْعُرْجُونِ الْقَدِيمِ <span class="nomor">٣٩</span></div>
  <div class="latin">Wal-qamara qaddarnāhu manāzila ḥattā ‘āda kal-‘urjūnil-qadīm</div>
  <div class="terjemahan">Dan telah Kami tetapkan bagi bulan manzilah-manzilah, sehingga dia kembali seperti bentuk tandan yang tua.</div>
</div>

<!-- AYAT 40 -->
<div class="ayat">
  <div class="arab">لَا الشَّمْسُ يَنْبَغِي لَهَا أَنْ تُدْرِكَ الْقَمَرَ وَلَا اللَّيْلُ سَابِقُ النَّهَارِ ۚ وَكُلٌّ فِي فَلَكٍ يَسْبَحُونَ <span class="nomor">٤٠</span></div>
  <div class="latin">Lā asy-syamsu yanbaghī lahā an tudrikal-qamara wa lal-lailu sābiqun-nahār, wa kullun fī falakin yasbaḥūn</div>
  <div class="terjemahan">Tidaklah mungkin bagi matahari mengejar bulan dan malam pun tidak dapat mendahului siang. Masing-masing beredar pada garis edarnya.</div>
</div>

<!-- AYAT 41 -->
<div class="ayat">
  <div class="arab">وَآيَةٌ لَهُمْ أَنَّا حَمَلْنَا ذُرِّيَّتَهُمْ فِي الْفُلْكِ الْمَشْحُونِ <span class="nomor">٤١</span></div>
  <div class="latin">Wa āyatul lahum annā ḥamalnā dzurriyyatahum fil-fulkil-masḥūn</div>
  <div class="terjemahan">Dan suatu tanda bagi mereka adalah bahwa Kami angkut keturunan mereka dalam kapal yang penuh muatan.</div>
</div>

<!-- AYAT 42 -->
<div class="ayat">
  <div class="arab">وَخَلَقْنَا لَهُمْ مِنْ مِثْلِهِ مَا يَرْكَبُونَ <span class="nomor">٤٢</span></div>
  <div class="latin">Wa khalaqnā lahum mim mitslihī mā yarkabūn</div>
  <div class="terjemahan">Dan Kami ciptakan untuk mereka apa yang semisal dengannya, yang dapat mereka kendarai.</div>
</div>

<!-- AYAT 43 -->
<div class="ayat">
  <div class="arab">وَإِنْ نَشَأْ نُغْرِقْهُمْ فَلَا صَرِيخَ لَهُمْ وَلَا هُمْ يُنْقَذُونَ <span class="nomor">٤٣</span></div>
  <div class="latin">Wa in nasyā’ nughrikhum fa lā ṣarīkha lahum wa lā hum yunqadzūn</div>
  <div class="terjemahan">Dan jika Kami menghendaki, niscaya Kami tenggelamkan mereka; maka tidak ada penolong bagi mereka dan tidak pula mereka dapat diselamatkan.</div>
</div>

<!-- AYAT 44 -->
<div class="ayat">
  <div class="arab">إِلَّا رَحْمَةً مِنَّا وَمَتَاعًا إِلَىٰ حِينٍ <span class="nomor">٤٤</span></div>
  <div class="latin">Illā raḥmatan minnā wa matā‘an ilā ḥīn</div>
  <div class="terjemahan">Melainkan (Kami selamatkan) karena rahmat dari Kami dan untuk memberikan kesenangan hidup sampai waktu tertentu.</div>
</div>

<!-- AYAT 45 -->
<div class="ayat">
  <div class="arab">وَإِذَا قِيلَ لَهُمُ اتَّقُوا مَا بَيْنَ أَيْدِيكُمْ وَمَا خَلْفَكُمْ لَعَلَّكُمْ تُرْحَمُونَ <span class="nomor">٤٥</span></div>
  <div class="latin">Wa idzā qīla lahumuttaqū mā baina aidīkum wa mā khalfakum la‘allakum turḥamūn</div>
  <div class="terjemahan">Dan apabila dikatakan kepada mereka, “Bertakwalah kepada apa yang ada di hadapanmu dan apa yang ada di belakangmu agar kamu dirahmati.”</div>
</div>
<!-- AYAT 46 -->
<div class="ayat">
  <div class="arab">وَمَا تَأْتِيهِمْ مِنْ آيَةٍ مِنْ آيَاتِ رَبِّهِمْ إِلَّا كَانُوا عَنْهَا مُعْرِضِينَ <span class="nomor">٤٦</span></div>
  <div class="latin">Wa mā ta'tīhim min āyatim min āyāti rabbihim illā kānū ‘anhā mu‘riḍīn</div>
  <div class="terjemahan">Dan tidak datang kepada mereka suatu tanda dari tanda-tanda Tuhan mereka melainkan mereka selalu berpaling darinya.</div>
</div>

<!-- AYAT 47 -->
<div class="ayat">
  <div class="arab">وَإِذَا قِيلَ لَهُمْ أَنْفِقُوا مِمَّا رَزَقَكُمُ اللَّهُ قَالَ الَّذِينَ كَفَرُوا لِلَّذِينَ آمَنُوا أَنُطْعِمُ مَنْ لَوْ يَشَاءُ اللَّهُ أَطْعَمَهُ ۖ إِنْ أَنْتُمْ إِلَّا فِي ضَلَالٍ مُبِينٍ <span class="nomor">٤٧</span></div>
  <div class="latin">Wa idzā qīla lahum anfiqū mimmā razaqakumullāh qālal-ladzīna kafarū lilladzīna āmanū anuṭ‘imu man lau yasyā’ullāhu aṭ‘amahu, in antum illā fī ḍalālin mubīn</div>
  <div class="terjemahan">Dan apabila dikatakan kepada mereka, “Infakkanlah sebagian rezeki yang diberikan Allah kepadamu,” orang-orang kafir berkata kepada orang-orang beriman, “Apakah kami akan memberi makan kepada orang yang jika Allah menghendaki tentu Dia akan memberinya makan? Kamu tidak lain hanyalah dalam kesesatan yang nyata.”</div>
</div>

<!-- AYAT 48 -->
<div class="ayat">
  <div class="arab">وَيَقُولُونَ مَتَىٰ هَٰذَا الْوَعْدُ إِنْ كُنْتُمْ صَادِقِينَ <span class="nomor">٤٨</span></div>
  <div class="latin">Wa yaqūlūna matā hādzal-wa‘du in kuntum ṣādiqīn</div>
  <div class="terjemahan">Dan mereka berkata, “Kapankah janji itu (datang), jika kamu adalah orang-orang yang benar?”</div>
</div>

<!-- AYAT 49 -->
<div class="ayat">
  <div class="arab">مَا يَنْظُرُونَ إِلَّا صَيْحَةً وَاحِدَةً تَأْخُذُهُمْ وَهُمْ يَخِصِّمُونَ <span class="nomor">٤٩</span></div>
  <div class="latin">Mā yanẓurūna illā ṣayḥatan wāḥidatan ta’khudzuhum wa hum yakhiṣṣimūn</div>
  <div class="terjemahan">Mereka tidak menunggu melainkan satu teriakan saja yang akan membinasakan mereka ketika mereka sedang bertengkar.</div>
</div>

<!-- AYAT 50 -->
<div class="ayat">
  <div class="arab">فَلَا يَسْتَطِيعُونَ تَوْصِيَةً وَلَا إِلَىٰ أَهْلِهِمْ يَرْجِعُونَ <span class="nomor">٥٠</span></div>
  <div class="latin">Fa lā yastaṭī‘ūna tauṣiyatan wa lā ilā ahlihim yarji‘ūn</div>
  <div class="terjemahan">Maka mereka tidak mampu membuat suatu wasiat dan tidak pula mereka dapat kembali kepada keluarganya.</div>
</div>

<!-- AYAT 51 -->
<div class="ayat">
  <div class="arab">وَنُفِخَ فِي الصُّورِ فَإِذَا هُمْ مِنَ الْأَجْدَاثِ إِلَىٰ رَبِّهِمْ يَنْسِلُونَ <span class="nomor">٥١</span></div>
  <div class="latin">Wa nufikha fiṣ-ṣūr fa-idzā hum minal-ajdātsi ilā rabbihim yansilūn</div>
  <div class="terjemahan">Dan ditiuplah sangkakala, maka tiba-tiba mereka keluar dari kuburnya menuju kepada Tuhan mereka.</div>
</div>

<!-- AYAT 52 -->
<div class="ayat">
  <div class="arab">قَالُوا يَا وَيْلَنَا مَنْ بَعَثَنَا مِنْ مَرْقَدِنَا ۜ ۗ هَٰذَا مَا وَعَدَ الرَّحْمَٰنُ وَصَدَقَ الْمُرْسَلُونَ <span class="nomor">٥٢</span></div>
  <div class="latin">Qālū yā wailanā man ba‘athanā mim marqadinā, hādzā mā wa‘adar-raḥmānu wa ṣadaqal-mursalūn</div>
  <div class="terjemahan">Mereka berkata, “Aduhai celakalah kami! Siapakah yang membangkitkan kami dari tempat tidur kami?” Inilah yang dijanjikan oleh Tuhan Yang Maha Pengasih dan benarlah para rasul.</div>
</div>

<!-- AYAT 53 -->
<div class="ayat">
  <div class="arab">إِنْ كَانَتْ إِلَّا صَيْحَةً وَاحِدَةً فَإِذَا هُمْ جَمِيعٌ لَدَيْنَا مُحْضَرُونَ <span class="nomor">٥٣</span></div>
  <div class="latin">In kānat illā ṣayḥatan wāḥidatan fa-idzā hum jamī‘un ladainā muḥḍarūn</div>
  <div class="terjemahan">Tidak ada teriakan itu selain sekali saja, maka tiba-tiba mereka semua dikumpulkan kepada Kami.</div>
</div>

<!-- AYAT 54 -->
<div class="ayat">
  <div class="arab">فَالْيَوْمَ لَا تُظْلَمُ نَفْسٌ شَيْئًا وَلَا تُجْزَوْنَ إِلَّا مَا كُنْتُمْ تَعْمَلُونَ <span class="nomor">٥٤</span></div>
  <div class="latin">Fal-yauma lā tuẓlamu nafsun syai’an wa lā tujzauna illā mā kuntum ta‘malūn</div>
  <div class="terjemahan">Maka pada hari itu tidak ada satu jiwa pun yang dizalimi sedikit pun dan kamu tidak akan dibalas kecuali dengan apa yang telah kamu kerjakan.</div>
</div>

<!-- AYAT 55 -->
<div class="ayat">
  <div class="arab">إِنَّ أَصْحَابَ الْجَنَّةِ الْيَوْمَ فِي شُغُلٍ فَاكِهُونَ <span class="nomor">٥٥</span></div>
  <div class="latin">Inna aṣḥābal-jannatil-yauma fī syughulin fākihūn</div>
  <div class="terjemahan">Sesungguhnya penghuni surga pada hari itu berada dalam kesibukan yang penuh kenikmatan.</div>
</div>
<!-- AYAT 56 -->
<div class="ayat">
  <div class="arab">هُمْ وَأَزْوَاجُهُمْ فِي ظِلَالٍ عَلَى الْأَرَائِكِ مُتَّكِئُونَ <span class="nomor">٥٦</span></div>
  <div class="latin">Hum wa azwājahum fī ẓilālin ‘alal-arā’iki muttaki’ūn</div>
  <div class="terjemahan">Mereka dan pasangan-pasangan mereka berada dalam tempat yang teduh, bertelekan di atas dipan-dipan.</div>
</div>

<!-- AYAT 57 -->
<div class="ayat">
  <div class="arab">لَهُمْ فِيهَا فَاكِهَةٌ وَلَهُمْ مَا يَدَّعُونَ <span class="nomor">٥٧</span></div>
  <div class="latin">Lahum fīhā fākihah, wa lahum mā yadda‘ūn</div>
  <div class="terjemahan">Di dalamnya mereka memperoleh buah-buahan dan apa pun yang mereka inginkan.</div>
</div>

<!-- AYAT 58 -->
<div class="ayat">
  <div class="arab">سَلَامٌ قَوْلًا مِنْ رَبٍّ رَحِيمٍ <span class="nomor">٥٨</span></div>
  <div class="latin">Salāmun qawlan mir rabbir-raḥīm</div>
  <div class="terjemahan">Ucapan salam (kepada mereka) dari Tuhan Yang Maha Penyayang.</div>
</div>

<!-- AYAT 59 -->
<div class="ayat">
  <div class="arab">وَامْتَازُوا الْيَوْمَ أَيُّهَا الْمُجْرِمُونَ <span class="nomor">٥٩</span></div>
  <div class="latin">Wam-tāzul-yauma ayyuhal-mujrimūn</div>
  <div class="terjemahan">Dan (dikatakan kepada orang-orang kafir), “Berpisahlah kalian pada hari ini, wahai orang-orang yang berdosa!”</div>
</div>

<!-- AYAT 60 -->
<div class="ayat">
  <div class="arab">أَلَمْ أَعْهَدْ إِلَيْكُمْ يَا بَنِي آدَمَ أَنْ لَا تَعْبُدُوا الشَّيْطَانَ ۖ إِنَّهُ لَكُمْ عَدُوٌّ مُبِينٌ <span class="nomor">٦٠</span></div>
  <div class="latin">A lam a‘had ilaikum yā banī ʾĀdama an lā ta‘budu-asy-syayṭān, innahū lakum ‘aduwwum mubīn</div>
  <div class="terjemahan">Bukankah Aku telah memerintahkan kepadamu, wahai anak Adam, agar kamu tidak menyembah setan? Sesungguhnya ia adalah musuh yang nyata bagimu.</div>
</div>

<!-- AYAT 61 -->
<div class="ayat">
  <div class="arab">وَأَنِ اعْبُدُونِي ۚ هَٰذَا صِرَاطٌ مُسْتَقِيمٌ <span class="nomor">٦١</span></div>
  <div class="latin">Wa an i‘budūnī, hādzā ṣirāṭum mustaqīm</div>
  <div class="terjemahan">Dan hendaklah kamu menyembah-Ku. Inilah jalan yang lurus.</div>
</div>

<!-- AYAT 62 -->
<div class="ayat">
  <div class="arab">وَلَقَدْ أَضَلَّ مِنْكُمْ جِبِلًّا كَثِيرًا ۖ أَفَلَمْ تَكُونُوا تَعْقِلُونَ <span class="nomor">٦٢</span></div>
  <div class="latin">Wa laqad aḍalla minkum jibillan katsīrā, afalam takūnū ta‘qilūn</div>
  <div class="terjemahan">Dan sungguh, dia (setan) telah menyesatkan sebagian besar di antara kamu. Maka apakah kamu tidak mengerti?</div>
</div>

<!-- AYAT 63 -->
<div class="ayat">
  <div class="arab">هَٰذِهِ جَهَنَّمُ الَّتِي كُنْتُمْ تُوعَدُونَ <span class="nomor">٦٣</span></div>
  <div class="latin">Hādzihi jahannamullatī kuntum tū‘adūn</div>
  <div class="terjemahan">Inilah neraka Jahanam yang dahulu telah diperingatkan kepadamu.</div>
</div>

<!-- AYAT 64 -->
<div class="ayat">
  <div class="arab">اصْلَوْهَا الْيَوْمَ بِمَا كُنْتُمْ تَكْفُرُونَ <span class="nomor">٦٤</span></div>
  <div class="latin">Iṣlauhal-yauma bimā kuntum takfurūn</div>
  <div class="terjemahan">Masuklah ke dalamnya pada hari ini disebabkan kamu dahulu mengingkarinya.</div>
</div>

<!-- AYAT 65 -->
<div class="ayat">
  <div class="arab">الْيَوْمَ نَخْتِمُ عَلَىٰ أَفْوَاهِهِمْ وَتُكَلِّمُنَا أَيْدِيهِمْ وَتَشْهَدُ أَرْجُلُهُمْ بِمَا كَانُوا يَكْسِبُونَ <span class="nomor">٦٥</span></div>
  <div class="latin">Al-yauma nakhtimu ‘alā afwāhihim wa tukallimunā aidīhim wa tasyhadu arjuluhum bimā kānū yaksibūn</div>
  <div class="terjemahan">Pada hari ini Kami tutup mulut mereka; tangan mereka akan berkata kepada Kami, dan kaki mereka akan memberi kesaksian terhadap apa yang dahulu mereka kerjakan.</div>
</div>
<!-- AYAT 66 -->
<div class="ayat">
  <div class="arab">وَلَوْ نَشَاءُ لَطَمَسْنَا عَلَىٰ أَعْيُنِهِمْ فَاسْتَبَقُوا الصِّرَاطَ فَأَنَّىٰ يُبْصِرُونَ <span class="nomor">٦٦</span></div>
  <div class="latin">Wa law nasyā’u laṭamasnā ‘alā a‘yunihim fastabaquṣ-ṣirāṭ, fa-annā yubṣirūn</div>
  <div class="terjemahan">Dan jika Kami menghendaki, niscaya Kami hapuskan penglihatan mereka; lalu mereka akan berlomba-lomba (mencari) jalan, maka bagaimana mereka dapat melihat?</div>
</div>

<!-- AYAT 67 -->
<div class="ayat">
  <div class="arab">وَلَوْ نَشَاءُ لَمَسَخْنَاهُمْ عَلَىٰ مَكَانَتِهِمْ فَمَا اسْتَطَاعُوا مُضِيًّا وَلَا يَرْجِعُونَ <span class="nomor">٦٧</span></div>
  <div class="latin">Wa law nasyā’u lamasakhnāhum ‘alā makānatihim famas-taṭā‘ū muḍiyyan wa lā yarji‘ūn</div>
  <div class="terjemahan">Dan jika Kami menghendaki, niscaya Kami ubah mereka di tempat mereka berada; maka mereka tidak dapat pergi dan tidak dapat kembali.</div>
</div>

<!-- AYAT 68 -->
<div class="ayat">
  <div class="arab">وَمَنْ نُعَمِّرْهُ نُنَكِّسْهُ فِي الْخَلْقِ ۖ أَفَلَا يَعْقِلُونَ <span class="nomor">٦٨</span></div>
  <div class="latin">Wa man nu‘ammirhu nunakkis-hu fil-khalq, afalā ya‘qilūn</div>
  <div class="terjemahan">Dan barang siapa Kami panjangkan umurnya niscaya Kami kembalikan dia kepada keadaan lemah. Maka apakah mereka tidak mengerti?</div>
</div>

<!-- AYAT 69 -->
<div class="ayat">
  <div class="arab">وَمَا عَلَّمْنَاهُ الشِّعْرَ وَمَا يَنْبَغِي لَهُ ۚ إِنْ هُوَ إِلَّا ذِكْرٌ وَقُرْآنٌ مُبِينٌ <span class="nomor">٦٩</span></div>
  <div class="latin">Wa mā ‘allamnāhusy-syi‘ra wa mā yanbagī lah, in huwa illā dzikrun wa qur’ānun mubīn</div>
  <div class="terjemahan">Dan Kami tidak mengajarkan syair kepadanya (Muhammad) dan itu tidak pantas baginya; ini hanyalah pengajaran dan Al-Qur’an yang jelas.</div>
</div>

<!-- AYAT 70 -->
<div class="ayat">
  <div class="arab">لِيُنْذِرَ مَنْ كَانَ حَيًّا وَيَحِقَّ الْقَوْلُ عَلَى الْكَافِرِينَ <span class="nomor">٧٠</span></div>
  <div class="latin">Liyundzira man kāna ḥayyā, wa yaḥiqqal-qaulu ‘alal-kāfirīn</div>
  <div class="terjemahan">Agar dia memberi peringatan kepada orang yang hidup (hatinya) dan agar pasti ketetapan azab bagi orang-orang kafir.</div>
</div>

<!-- AYAT 71 -->
<div class="ayat">
  <div class="arab">أَوَلَمْ يَرَوْا أَنَّا خَلَقْنَا لَهُمْ مِمَّا عَمِلَتْ أَيْدِينَا أَنْعَامًا فَهُمْ لَهَا مَالِكُونَ <span class="nomor">٧١</span></div>
  <div class="latin">A wa lam yarau annā khalaqnā lahum mimmā ‘amilat aidīnā an‘āman fahum lahā mālikūn</div>
  <div class="terjemahan">Dan apakah mereka tidak melihat bahwa Kami menciptakan hewan ternak untuk mereka, yaitu sebagian dari apa yang Kami ciptakan dengan kekuasaan Kami, lalu mereka menguasainya?</div>
</div>

<!-- AYAT 72 -->
<div class="ayat">
  <div class="arab">وَذَلَّلْنَاهَا لَهُمْ فَمِنْهَا رَكُوبُهُمْ وَمِنْهَا يَأْكُلُونَ <span class="nomor">٧٢</span></div>
  <div class="latin">Wa dzallalnāhā lahum fa minhā rukūbuhum wa minhā ya’kulūn</div>
  <div class="terjemahan">Dan Kami tundukkan hewan-hewan itu untuk mereka; maka sebagian dapat mereka tunggangi dan sebagian dapat mereka makan.</div>
</div>

<!-- AYAT 73 -->
<div class="ayat">
  <div class="arab">وَلَهُمْ فِيهَا مَنَافِعُ وَمَشَارِبُ ۖ أَفَلَا يَشْكُرُونَ <span class="nomor">٧٣</span></div>
  <div class="latin">Wa lahum fīhā manāfi‘u wa masyārib, a fa lā yasykurūn</div>
  <div class="terjemahan">Dan mereka memperoleh berbagai manfaat dan minuman darinya; maka mengapa mereka tidak bersyukur?</div>
</div>

<!-- AYAT 74 -->
<div class="ayat">
  <div class="arab">وَاتَّخَذُوا مِنْ دُونِ اللَّهِ آلِهَةً لَعَلَّهُمْ يُنْصَرُونَ <span class="nomor">٧٤</span></div>
  <div class="latin">Wa ttakhadzū min dūnillāhi ālihatan la‘allahum yunṣarūn</div>
  <div class="terjemahan">Namun mereka mengambil sesembahan selain Allah, agar mereka mendapat pertolongan.</div>
</div>

<!-- AYAT 75 -->
<div class="ayat">
  <div class="arab">لَا يَسْتَطِيعُونَ نَصْرَهُمْ وَهُمْ لَهُمْ جُنْدٌ مُحْضَرُونَ <span class="nomor">٧٥</span></div>
  <div class="latin">Lā yastaṭī‘ūna naṣrahum wa hum lahum jundum muḥḍarūn</div>
  <div class="terjemahan">Padahal berhala-berhala itu tidak dapat menolong mereka, bahkan menjadi tentara yang diseret (ke neraka) bersama mereka.</div>
</div>
<!-- AYAT 76 -->
<div class="ayat">
  <div class="arab">فَلَا يَحْزُنْكَ قَوْلُهُمْ ۘ إِنَّا نَعْلَمُ مَا يُسِرُّونَ وَمَا يُعْلِنُونَ <span class="nomor">٧٦</span></div>
  <div class="latin">Fa lā yaḥzunka qawluhum, innā na‘lamu mā yusirrūna wa mā yu‘linūn</div>
  <div class="terjemahan">Maka janganlah engkau (Muhammad) bersedih hati terhadap apa yang mereka katakan. Sesungguhnya Kami mengetahui apa yang mereka rahasiakan dan apa yang mereka nyatakan.</div>
</div>

<!-- AYAT 77 -->
<div class="ayat">
  <div class="arab">أَوَلَمْ يَرَ الْإِنْسَانُ أَنَّا خَلَقْنَاهُ مِنْ نُطْفَةٍ فَإِذَا هُوَ خَصِيمٌ مُبِينٌ <span class="nomor">٧٧</span></div>
  <div class="latin">A wa lam yaral-insānu annā khalaqnāhu min nuṭfatin fa-idzā huwa khaṣīmun mubīn</div>
  <div class="terjemahan">Dan tidakkah manusia melihat bahwa Kami menciptakannya dari setetes mani? Tetapi tiba-tiba ia menjadi pembantah yang nyata.</div>
</div>

<!-- AYAT 78 -->
<div class="ayat">
  <div class="arab">وَضَرَبَ لَنَا مَثَلًا وَنَسِيَ خَلْقَهُ ۖ قَالَ مَنْ يُحْيِ الْعِظَامَ وَهِيَ رَمِيمٌ <span class="nomor">٧٨</span></div>
  <div class="latin">Wa ḍaraba lanā matsalan wa nasīya khalqah, qāla man yuḥyil-‘iẓāma wa hiya ramīm</div>
  <div class="terjemahan">Dan ia membuat perumpamaan bagi Kami dan melupakan asal kejadiannya. Ia berkata, “Siapakah yang dapat menghidupkan tulang-belulang yang telah hancur?”</div>
</div>

<!-- AYAT 79 -->
<div class="ayat">
  <div class="arab">قُلْ يُحْيِيهَا الَّذِي أَنْشَأَهَا أَوَّلَ مَرَّةٍ ۖ وَهُوَ بِكُلِّ خَلْقٍ عَلِيمٌ <span class="nomor">٧٩</span></div>
  <div class="latin">Qul yuḥyīhā alladzī ansya’ahā awwala marrah, wa huwa bikulli khalqin ‘alīm</div>
  <div class="terjemahan">Katakanlah, “Yang akan menghidupkannya ialah (Allah) yang menciptakannya pertama kali. Dan Dia Maha Mengetahui tentang segala makhluk.”</div>
</div>

<!-- AYAT 80 -->
<div class="ayat">
  <div class="arab">الَّذِي جَعَلَ لَكُمْ مِنَ الشَّجَرِ الْأَخْضَرِ نَارًا فَإِذَا أَنْتُمْ مِنْهُ تُوقِدُونَ <span class="nomor">٨٠</span></div>
  <div class="latin">Alladzī ja‘ala lakum minasysyajari l-akhdari nāran fa-idzā antum minhu tūqidūn</div>
  <div class="terjemahan">Yaitu (Allah) yang menjadikan untukmu api dari kayu yang hijau, maka tiba-tiba kamu menyalakan (api) dari kayu itu.</div>
</div>

<!-- AYAT 81 -->
<div class="ayat">
  <div class="arab">أَوَلَيْسَ الَّذِي خَلَقَ السَّمَاوَاتِ وَالْأَرْضَ بِقَادِرٍ عَلَىٰ أَنْ يَخْلُقَ مِثْلَهُمْ ۚ بَلَىٰ ۚ وَهُوَ الْخَلَّاقُ الْعَلِيمُ <span class="nomor">٨١</span></div>
  <div class="latin">A wa laisa alladzī khalaqas-samāwāti wal-arḍa biqādirin ‘alā an yakhluqa mitslahum, balā wa huwal-khallāqul-‘alīm</div>
  <div class="terjemahan">Dan tidakkah (Allah) yang menciptakan langit dan bumi berkuasa menciptakan yang serupa dengan mereka? Benar, Dia Maha Pencipta lagi Maha Mengetahui.</div>
</div>

<!-- AYAT 82 -->
<div class="ayat">
  <div class="arab">إِنَّمَا أَمْرُهُ إِذَا أَرَادَ شَيْئًا أَنْ يَقُولَ لَهُ كُنْ فَيَكُونُ <span class="nomor">٨٢</span></div>
  <div class="latin">Innamā amruhū idzā arāda syai’an an yaqūla lahū kun fa yakūn</div>
  <div class="terjemahan">Sesungguhnya urusan-Nya apabila Dia menghendaki sesuatu hanyalah berkata kepadanya: “Jadilah!” maka jadilah ia.</div>
</div>

<!-- AYAT 83 -->
<div class="ayat">
  <div class="arab">فَسُبْحَانَ الَّذِي بِيَدِهِ مَلَكُوتُ كُلِّ شَيْءٍ وَإِلَيْهِ تُرْجَعُونَ <span class="nomor">٨٣</span></div>
  <div class="latin">Fa subḥānal-ladzī biyadihī malakūtu kulli syai’in wa ilaihi turja‘ūn</div>
  <div class="terjemahan">Maka Mahasuci (Allah) yang di tangan-Nya kekuasaan atas segala sesuatu, dan kepada-Nyalah kamu dikembalikan.</div>
</div>
@endsection