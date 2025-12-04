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
  
  <div class="ayat">
    <div class="arab">إِنِّي آمَنتُ بِرَبِّكُمْ فَاسْمَعُونِ <span class="nomor">25</span></div>
    <div class="latin">Inneee aamantu bi Rabbikum fasma'oon</div>
    <div class="terjemahan">Sesungguhnya aku telah beriman kepada Tuhanmu; maka dengarkanlah (pengakuan keimanan)-ku.”</div>
  </div>
  
  <div class="ayat">
    <div class="arab">قِيلَ ادْخُلِ الْجَنَّةَ ۖ قَالَ يَا لَيْتَ قَوْمِي يَعْلَمُونَ <span class="nomor">26</span></div>
    <div class="latin">Qeelad khulil Jannnah; qaala yaa laita qawmee ya'lamoon</div>
    <div class="terjemahan">Dikatakan (kepadanya), “Masuklah ke surga.” Dia (laki-laki itu) berkata, “Alangkah baiknya sekiranya kaumku mengetahui,</div>
  </div>
  
  <div class="ayat">
    <div class="arab">بِمَا غَفَرَ لِي رَبِّي وَجَعَلَنِي مِنَ الْمُكْرَمِينَ <span class="nomor">27</span></div>
    <div class="latin">Bimaa ghafara lee Rabbee wa ja'alanee minal mukrameen</div>
    <div class="terjemahan">apa yang menyebabkan Tuhanku memberi ampun kepadaku dan menjadikan aku termasuk orang-orang yang telah dimuliakan.”</div>
  </div>
  
  <div class="ayat">
    <div class="arab">۞ وَمَا أَنزَلْنَا عَلَىٰ قَوْمِهِ مِن بَعْدِهِ مِن جُندٍ مِّنَ السَّمَاءِ وَمَا كُنَّا مُنزِلِينَ <span class="nomor">28</span></div>
    <div class="latin">Wa maaa anzalnaa 'alaa qawmihee mim ba'dihee min jundim minas-samaaa'i wa maa kunnaa munzileen</div>
    <div class="terjemahan">Dan setelah dia (meninggal), Kami tidak menurunkan suatu pasukan pun dari langit kepada kaumnya, dan Kami tidak perlu menurunkannya.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">إِن كَانَتْ إِلَّا صَيْحَةً وَاحِدَةً فَإِذَا هُمْ خَامِدُونَ <span class="nomor">29</span></div>
    <div class="latin">In kaanat illaa saihatanw waahidatan fa-izaa hum khaamidoon</div>
    <div class="terjemahan">Tidak ada siksaan terhadap mereka melainkan dengan satu teriakan saja; maka seketika itu mereka mati.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">يَا حَسْرَةً عَلَى الْعِبَادِ ۚ مَا يَأْتِيهِم مِّن رَّسُولٍ إِلَّا كَانُوا بِهِ يَسْتَهْزِئُونَ <span class="nomor">30</span></div>
    <div class="latin">Yaa hasratan 'alal 'ibaad; maa yaateehim mir Rasoolin illaa kaanoo bihee yastahzi 'oon</div>
    <div class="terjemahan">Alangkah besar penyesalan terhadap hamba-hamba itu, setiap datang seorang rasul kepada mereka, mereka selalu memperolok-olokkannya.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">أَلَمْ يَرَوْا كَمْ أَهْلَكْنَا قَبْلَهُم مِّنَ الْقُرُونِ أَنَّهُمْ إِلَيْهِمْ لَا يَرْجِعُونَ <span class="nomor">31</span></div>
    <div class="latin">Alam yaraw kam ahlak naa qablahum minal qurooni annahum ilaihim laa yarji'oon</div>
    <div class="terjemahan">Tidakkah mereka mengetahui berapa banyak umat-umat sebelum mereka yang telah Kami binasakan. Orang-orang (yang telah Kami binasakan) itu tidak ada yang kembali kepada mereka.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَإِن كُلٌّ لَّمَّا جَمِيعٌ لَّدَيْنَا مُحْضَرُونَ <span class="nomor">32</span></div>
    <div class="latin">Wa in kullul lammaa jamee'ul-ladainaa muhdaroon</div>
    <div class="terjemahan">Dan setiap (umat), semuanya akan dihadapkan kepada Kami.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَآيَةٌ لَّهُمُ الْأَرْضُ الْمَيْتَةُ أَحْيَيْنَاهَا وَأَخْرَجْنَا مِنْهَا حَبًّا فَمِنْهُ يَأْكُلُونَ <span class="nomor">33</span></div>
    <div class="latin">Wa Aayatul lahumul ardul maitatu ahyainaahaa wa akhrajnaa minhaa habban faminhu yaakuloon</div>
    <div class="terjemahan">Dan suatu tanda (kebesaran Allah) bagi mereka adalah bumi yang mati (tandus). Kami hidupkan bumi itu dan Kami keluarkan darinya biji-bijian, maka dari (biji-bijian) itu mereka makan.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَجَعَلْنَا فِيهَا جَنَّاتٍ مِّن نَّخِيلٍ وَأَعْنَابٍ وَفَجَّرْنَا فِيهَا مِنَ الْعُيُونِ <span class="nomor">34</span></div>
    <div class="latin">Wa ja'alnaa feehaa jannaatim min nakheelinw wa a'naabinw wa fajjarnaa feeha minal 'uyoon</div>
    <div class="terjemahan">Dan Kami jadikan padanya di bumi itu kebun-kebun kurma dan anggur dan Kami pancarkan padanya beberapa mata air,</div>
  </div>
  
  <div class="ayat">
    <div class="arab">لِيَأْكُلُوا مِن ثَمَرِهِ وَمَا عَمِلَتْهُ أَيْدِيهِمْ ۖ أَفَلَا يَشْكُرُونَ <span class="nomor">35</span></div>
    <div class="latin">Liyaakuloo min samarihee wa maa 'amilat-hu aideehim; afalaa yashkuroon</div>
    <div class="terjemahan">agar mereka dapat makan dari buahnya, dan dari hasil usaha tangan mereka. Maka mengapa mereka tidak bersyukur?</div>
  </div>
  
  <div class="ayat">
    <div class="arab">سُبْحَانَ الَّذِي خَلَقَ الْأَزْوَاجَ كُلَّهَا مِمَّا تُنبِتُ الْأَرْضُ وَمِنْ أَنفُسِهِمْ وَمِمَّا لَا يَعْلَمُونَ <span class="nomor">36</span></div>
    <div class="latin">Subhaanal lazee khalaqal azwaaja kullahaa mimmaa tumbitul ardu wa min anfusihim wa mimmaa laa ya'lamoon</div>
    <div class="terjemahan">Mahasuci (Allah) yang telah menciptakan semuanya berpasang-pasangan, baik dari apa yang ditumbuhkan oleh bumi dan dari diri mereka sendiri, maupun dari apa yang tidak mereka ketahui.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَآيَةٌ لَّهُمُ اللَّيْلُ نَسْلَخُ مِنْهُ النَّهَارَ فَإِذَا هُم مُّظْلِمُونَ <span class="nomor">37</span></div>
    <div class="latin">Wa Aayatul lahumul lailu naslakhu minhun nahaara fa-izaa hum muzlimoon</div>
    <div class="terjemahan">Dan suatu tanda (kebesaran Allah) bagi mereka adalah malam; Kami tanggalkan siang dari (malam) itu, maka seketika itu mereka (berada dalam) kegelapan,</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَالشَّمْسُ تَجْرِي لِمُسْتَقَرٍّ لَّهَا ۚ ذَٰلِكَ تَقْدِيرُ الْعَزِيزِ الْعَلِيمِ <span class="nomor">38</span></div>
    <div class="latin">Wash-shamsu tajree limustaqarril lahaa; zaalika taqdeerul 'Azeezil Aleem</div>
    <div class="terjemahan">dan matahari berjalan di tempat peredarannya. Demikianlah ketetapan (Allah) Yang Mahaperkasa, Maha Mengetahui.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَالْقَمَرَ قَدَّرْنَاهُ مَنَازِلَ حَتَّىٰ عَادَ كَالْعُرْجُونِ الْقَدِيمِ <span class="nomor">39</span></div>
    <div class="latin">Walqamara qaddarnaahu manaazila hattaa 'aada kal'ur joonil qadeem</div>
    <div class="terjemahan">Dan telah Kami tetapkan tempat peredaran bagi bulan, sehingga (setelah ia sampai ke tempat peredaran yang terakhir) kembalilah ia seperti bentuk tandan yang tua.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">لَا الشَّمْسُ يَنبَغِي لَهَا أَن تُدْرِكَ الْقَمَرَ وَلَا اللَّيْلُ سَابِقُ النَّهَارِ ۚ وَكُلٌّ فِي فَلَكٍ يَسْبَحُونَ <span class="nomor">40</span></div>
    <div class="latin">Lash shamsu yambaghee lahaaa an tudrikal qamara wa lal lailu saabiqun nahaar; wa kullun fee falaki yasbahoon</div>
    <div class="terjemahan">Tidaklah mungkin bagi matahari mengejar bulan dan malam pun tidak dapat mendahului siang. Masing-masing beredar pada garis edarnya.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَآيَةٌ لَّهُمْ أَنَّا حَمَلْنَا ذُرِّيَّتَهُمْ فِي الْفُلْكِ الْمَشْحُونِ <span class="nomor">41</span></div>
    <div class="latin">Wa Aayatul lahum annaa hamalnaa zurriyatahum fil fulkil mashhoon</div>
    <div class="terjemahan">Dan suatu tanda (kebesaran Allah) bagi mereka adalah bahwa Kami angkut keturunan mereka dalam kapal yang penuh muatan,</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَخَلَقْنَا لَهُم مِّن مِّثْلِهِ مَا يَرْكَبُونَ <span class="nomor">42</span></div>
    <div class="latin">Wa khalaqnaa lahum mim-mislihee maa yarkaboon</div>
    <div class="terjemahan">dan Kami ciptakan (juga) untuk mereka (angkutan lain) seperti apa yang mereka kendarai.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَإِن نَّشَأْ نُغْرِقْهُمْ فَلَا صَرِيخَ لَهُمْ وَلَا هُمْ يُنقَذُونَ <span class="nomor">43</span></div>
    <div class="latin">Wa in nashaa nughriqhum falaa sareekha lahum wa laa hum yunqazoon</div>
    <div class="terjemahan">Dan jika Kami menghendaki, Kami tenggelamkan mereka. Maka tidak ada penolong bagi mereka dan tidak (pula) mereka diselamatkan,</div>
  </div>
  
  <div class="ayat">
    <div class="arab">إِلَّا رَحْمَةً مِّنَّا وَمَتَاعًا إِلَىٰ حِينٍ <span class="nomor">44</span></div>
    <div class="latin">Illaa rahmatam minnaa wa mataa'an ilaa heen</div>
    <div class="terjemahan">melainkan (Kami selamatkan mereka) karena rahmat yang besar dari Kami dan untuk memberikan kesenangan hidup sampai waktu tertentu.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَإِذَا قِيلَ لَهُمُ اتَّقُوا مَا بَيْنَ أَيْدِيكُمْ وَمَا خَلْفَكُمْ لَعَلَّكُمْ تُرْحَمُونَ <span class="nomor">45</span></div>
    <div class="latin">Wa izaa qeela lahumuttaqoo maa baina aideekum wa maa khalfakum la'allakum turhamoon</div>
    <div class="terjemahan">Dan apabila dikatakan kepada mereka, “Takutlah kamu akan siksa yang di hadapanmu (di dunia) dan azab yang akan datang (akhirat) agar kamu mendapat rahmat.”</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَمَا تَأْتِيهِم مِّنْ آيَةٍ مِّنْ آيَاتِ رَبِّهِمْ إِلَّا كَانُوا عَنْهَا مُعْرِضِينَ <span class="nomor">46</span></div>
    <div class="latin">Wa maa taateehim min aayatim min ayataati Rabbihim illaa kaanoo 'anhaa mu'rideen</div>
    <div class="terjemahan">Dan setiap kali suatu tanda dari tanda-tanda (kebesaran) Tuhan datang kepada mereka, mereka selalu berpaling darinya.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَإِذَا قِيلَ لَهُمْ أَنفِقُوا مِمَّا رَزَقَكُمُ اللَّهُ قَالَ الَّذِينَ كَفَرُوا لِلَّذِينَ آمَنُوا أَنُطْعِمُ مَن لَّوْ يَشَاءُ اللَّهُ أَطْعَمَهُ إِنْ أَنتُمْ إِلَّا فِي ضَلَالٍ مُّبِينٍ <span class="nomor">47</span></div>
    <div class="latin">Wa izaa qeela lahum anfiqoo mimmaa razaqakumul laahu qaalal lazeena kafaroo lillazeena aamanooo anut'imu mal-law yashaaa'ul laahu at'amahooo in antum illaa fee dalaalim mubeen</div>
    <div class="terjemahan">Dan apabila dikatakan kepada mereka, “Infakkanlah sebagian rezeki yang diberikan Allah kepadamu,” orang-orang yang kafir itu berkata kepada orang-orang yang beriman, “Apakah pantas kami memberi makan kepada orang-orang yang jika Allah menghendaki Dia akan memberinya makan? Kamu benar-benar dalam kesesatan yang nyata.”</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَيَقُولُونَ مَتَىٰ هَٰذَا الْوَعْدُ إِن كُنتُمْ صَادِقِينَ <span class="nomor">48</span></div>
    <div class="latin">Wa yaqooloona mataa haazal wa'du in kuntum saadiqeen</div>
    <div class="terjemahan">Dan mereka (orang-orang kafir) berkata, “Kapan janji (hari berbangkit) itu (terjadi) jika kamu orang yang benar?”</div>
  </div>
  
  <div class="ayat">
    <div class="arab">مَا يَنظُرُونَ إِلَّا صَيْحَةً وَاحِدَةً تَأْخُذُهُمْ وَهُمْ يَخِصِّمُونَ <span class="nomor">49</span></div>
    <div class="latin">Maa yanzuroona illaa saihatanw waahidatan taa khuzuhum wa hum yakhissimoon</div>
    <div class="terjemahan">Mereka hanya menunggu satu teriakan, yang akan membinasakan mereka ketika mereka sedang bertengkar.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">فَلَا يَسْتَطِيعُونَ تَوْصِيَةً وَلَا إِلَىٰ أَهْلِهِمْ يَرْجِعُونَ <span class="nomor">50</span></div>
    <div class="latin">Falaa yastatee'oona taw siyatanw-wa laaa ilaaa ahlihim yarji'oon</div>
    <div class="terjemahan">Sehingga mereka tidak mampu membuat suatu wasiat dan mereka (juga) tidak dapat kembali kepada keluarganya.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَنُفِخَ فِي الصُّورِ فَإِذَا هُم مِّنَ الْأَجْدَاثِ إِلَىٰ رَبِّهِمْ يَنسِلُونَ <span class="nomor">51</span></div>
    <div class="latin">Wa nufikha fis-soori faizaa hum minal ajdaasi ilaa Rabbihim yansiloon</div>
    <div class="terjemahan">Lalu ditiuplah sangkakala, maka seketika itu mereka keluar dari kuburnya (dalam keadaan hidup), menuju kepada Tuhannya.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">قَالُوا يَا وَيْلَنَا مَن بَعَثَنَا مِن مَّرْقَدِنَا ۜ ۗ هَٰذَا مَا وَعَدَ الرَّحْمَٰنُ وَصَدَقَ الْمُرْسَلُونَ <span class="nomor">52</span></div>
    <div class="latin">Qaaloo yaa wailanaa mam ba'asanaa mim marqadinaa; haaza maa wa'adar Rahmanu wa sadaqal mursaloon</div>
    <div class="terjemahan">Mereka berkata, “Celakalah kami! Siapakah yang membangkitkan kami dari tempat tidur kami (kubur)?” Inilah yang dijanjikan (Allah) Yang Maha Pengasih dan benarlah rasul-rasul(-Nya).</div>
  </div>
  
  <div class="ayat">
    <div class="arab">إِن كَانَتْ إِلَّا صَيْحَةً وَاحِدَةً فَإِذَا هُمْ جَمِيعٌ لَّدَيْنَا مُحْضَرُونَ <span class="nomor">53</span></div>
    <div class="latin">In kaanat illaa saihatanw waahidatan fa-izaa hum jamee'ul ladainaa muhdaroon</div>
    <div class="terjemahan">Teriakan itu hanya sekali saja, maka seketika itu mereka semua dihadapkan kepada Kami (untuk dihisab).</div>
  </div>
  
  <div class="ayat">
    <div class="arab">فَالْيَوْمَ لَا تُظْلَمُ نَفْسٌ شَيْئًا وَلَا تُجْزَوْنَ إِلَّا مَا كُنتُمْ تَعْمَلُونَ <span class="nomor">54</span></div>
    <div class="latin">Fal-Yawma laa tuzlamu nafsun shai'anw-wa laa tujzawna illaa maa kuntum ta'maloon</div>
    <div class="terjemahan">Maka pada hari itu seseorang tidak akan dirugikan sedikit pun dan kamu tidak akan diberi balasan, kecuali sesuai dengan apa yang telah kamu kerjakan.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">إِنَّ أَصْحَابَ الْجَنَّةِ الْيَوْمَ فِي شُغُلٍ فَاكِهُونَ <span class="nomor">55</span></div>
    <div class="latin">Inna Ashaabal jannatil Yawma fee shughulin faakihoon</div>
    <div class="terjemahan">Sesungguhnya penghuni surga pada hari itu bersenang-senang dalam kesibukan (mereka).</div>
  </div>
  
  <div class="ayat">
    <div class="arab">هُمْ وَأَزْوَاجُهُمْ فِي ظِلَالٍ عَلَى الْأَرَائِكِ مُتَّكِئُونَ <span class="nomor">56</span></div>
    <div class="latin">Hum wa azwaajuhum fee zilaalin 'alal araaa'iki muttaki'oon</div>
    <div class="terjemahan">Mereka dan pasangan-pasangannya berada dalam tempat yang teduh, bersandar di atas dipan-dipan.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">لَهُمْ فِيهَا فَاكِهَةٌ وَلَهُم مَّا يَدَّعُونَ <span class="nomor">57</span></div>
    <div class="latin">Lahum feehaa faakiha tunw-wa lahum maa yadda'oon</div>
    <div class="terjemahan">Di surga itu mereka memperoleh buah-buahan dan memperoleh apa saja yang mereka inginkan.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">سَلَامٌ قَوْلًا مِّن رَّبٍّ رَّحِيمٍ <span class="nomor">58</span></div>
    <div class="latin">Salaamun qawlam mir Rabbir Raheem</div>
    <div class="terjemahan">(Kepada mereka dikatakan), “Salam,” sebagai ucapan selamat dari Tuhan Yang Maha Penyayang.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَامْتَازُوا الْيَوْمَ أَيُّهَا الْمُجْرِمُونَ <span class="nomor">59</span></div>
    <div class="latin">Wamtaazul Yawma ayyuhal mujrimoon</div>
    <div class="terjemahan">Dan (dikatakan kepada orang-orang kafir), “Berpisahlah kamu (dari orang-orang mukmin) pada hari ini, wahai orang-orang yang berdosa!</div>
  </div>
  
  <div class="ayat">
    <div class="arab">۞ أَلَمْ أَعْهَدْ إِلَيْكُمْ يَا بَنِي آدَمَ أَن لَّا تَعْبُدُوا الشَّيْطَانَ ۖ إِنَّهُ لَكُمْ عَدُوٌّ مُّبِينٌ <span class="nomor">60</span></div>
    <div class="latin">Alam a'had ilaikum yaa Baneee Aadama al-laa ta'budush Shaitaana innahoo lakum 'aduwwum mubeen</div>
    <div class="terjemahan">Bukankah Aku telah memerintahkan kepadamu wahai anak cucu Adam agar kamu tidak menyembah setan? Sungguh, setan itu musuh yang nyata bagi kamu,</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَأَنِ اعْبُدُونِي ۚ هَٰذَا صِرَاطٌ مُّسْتَقِيمٌ <span class="nomor">61</span></div>
    <div class="latin">Wa ani'budoonee; haazaa Siraatum Mustaqeem</div>
    <div class="terjemahan">dan hendaklah kamu menyembah-Ku. Inilah jalan yang lurus.”</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَلَقَدْ أَضَلَّ مِنكُمْ جِبِلًّا كَثِيرًا ۖ أَفَلَمْ تَكُونُوا تَعْقِلُونَ <span class="nomor">62</span></div>
    <div class="latin">Wa laqad adalla minkum jibillan kaseeraa; afalam takoonoo ta'qiloon</div>
    <div class="terjemahan">Dan sungguh, ia (setan itu) telah menyesatkan sebagian besar di antara kamu. Maka apakah kamu tidak mengerti?</div>
  </div>
  
  <div class="ayat">
    <div class="arab">هَٰذِهِ جَهَنَّمُ الَّتِي كُنتُمْ تُوعَدُونَ <span class="nomor">63</span></div>
    <div class="latin">Haazihee Jahannamul latee kuntum too'adoon</div>
    <div class="terjemahan">Inilah (neraka) Jahanam yang dahulu telah diperingatkan kepadamu.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">اصْلَوْهَا الْيَوْمَ بِمَا كُنتُمْ تَكْفُرُونَ <span class="nomor">64</span></div>
    <div class="latin">Islawhal Yawma bimaa kuntum takfuroon</div>
    <div class="terjemahan">Masuklah ke dalamnya pada hari ini karena dahulu kamu mengingkarinya.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">الْيَوْمَ نَخْتِمُ عَلَىٰ أَفْوَاهِهِمْ وَتُكَلِّمُنَا أَيْدِيهِمْ وَتَشْهَدُ أَرْجُلُهُم بِمَا كَانُوا يَكْسِبُونَ <span class="nomor">65</span></div>
    <div class="latin">Al-Yawma nakhtimu 'alaaa afwaahihim wa tukallimunaaa aideehim wa tashhadu arjuluhum bimaa kaanoo yaksiboon</div>
    <div class="terjemahan">Pada hari ini Kami tutup mulut mereka; tangan mereka akan berkata kepada Kami dan kaki mereka akan memberi kesaksian terhadap apa yang dahulu mereka kerjakan.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَلَوْ نَشَاءُ لَطَمَسْنَا عَلَىٰ أَعْيُنِهِمْ فَاسْتَبَقُوا الصِّرَاطَ فَأَنَّىٰ يُبْصِرُونَ <span class="nomor">66</span></div>
    <div class="latin">Wa law nashaaa'u lata masna 'alaaa aiyunihim fasta baqus-siraata fa-annaa yubsiroon</div>
    <div class="terjemahan">Dan jika Kami menghendaki, pastilah Kami hapuskan penglihatan mata mereka; sehingga mereka berlomba-lomba (mencari) jalan. Maka bagaimana mungkin mereka dapat melihat?</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَلَوْ نَشَاءُ لَمَسَخْنَاهُمْ عَلَىٰ مَكَانَتِهِمْ فَمَا اسْتَطَاعُوا مُضِيًّا وَلَا يَرْجِعُونَ <span class="nomor">67</span></div>
    <div class="latin">Wa law nashaaa'u lamasakhnaahum 'alaa makaanatihim famas-tataa'oo mudiyyanw-wa laa yarji'oon</div>
    <div class="terjemahan">Dan jika Kami menghendaki, pastilah Kami ubah bentuk mereka di tempat mereka berada; sehingga mereka tidak sanggup berjalan lagi dan juga tidak sanggup kembali.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَمَن نُّعَمِّرْهُ نُنَكِّسْهُ فِي الْخَلْقِ ۖ أَفَلَا يَعْقِلُونَ <span class="nomor">68</span></div>
    <div class="latin">Wa man nu 'ammirhu nunakkishu fil-khalq; afalaa ya'qiloon</div>
    <div class="terjemahan">Dan barangsiapa Kami panjangkan umurnya niscaya Kami kembalikan dia kepada awal kejadian(nya). Maka mengapa mereka tidak mengerti?</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَمَا عَلَّمْنَاهُ الشِّعْرَ وَمَا يَنبَغِي لَهُ ۚ إِنْ هُوَ إِلَّا ذِكْرٌ وَقُرْآنٌ مُّبِينٌ <span class="nomor">69</span></div>
    <div class="latin">Wa maa 'allamnaahush shi'ra wa maa yambaghee lah; in huwa illaa zikrunw-wa Qur-aanum mubeen</div>
    <div class="terjemahan">Dan Kami tidak mengajarkan syair kepadanya (Muhammad) dan bersyair itu tidaklah pantas baginya. Al-Qur'an itu tidak lain hanyalah pelajaran dan Kitab yang jelas,</div>
  </div>
  
  <div class="ayat">
    <div class="arab">لِّيُنذِرَ مَن كَانَ حَيًّا وَيَحِقَّ الْقَوْلُ عَلَى الْكَافِرِينَ <span class="nomor">70</span></div>
    <div class="latin">Liyunzira man kaana haiyanw-wa yahiqqal qawlu 'alal-kaafireen</div>
    <div class="terjemahan">agar dia (Muhammad) memberi peringatan kepada orang-orang yang hidup (hatinya) dan agar pasti ketetapan (azab) terhadap orang-orang kafir.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">أَوَلَمْ يَرَوْا أَنَّا خَلَقْنَا لَهُم مِّمَّا عَمِلَتْ أَيْدِينَا أَنْعَامًا فَهُمْ لَهَا مَالِكُونَ <span class="nomor">71</span></div>
    <div class="latin">Awalam yaraw annaa khalaqnaa lahum mimmaa 'amilat aideenaaa an'aaman fahum lahaa maalikoon</div>
    <div class="terjemahan">Dan tidakkah mereka melihat bahwa Kami telah menciptakan hewan ternak untuk mereka, yaitu sebagian dari apa yang telah Kami ciptakan dengan kekuasaan Kami, lalu mereka menguasainya?</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَذَلَّلْنَاهَا لَهُمْ فَمِنْهَا رَكُوبُهُمْ وَمِنْهَا يَأْكُلُونَ <span class="nomor">72</span></div>
    <div class="latin">Wa zallalnaahaa lahum faminhaa rakoobuhum wa minhaa yaakuloon</div>
    <div class="terjemahan">Dan Kami menundukkannya (hewan-hewan itu) untuk mereka; lalu sebagiannya untuk menjadi tunggangan mereka dan sebagian untuk mereka makan.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَلَهُمْ فِيهَا مَنَافِعُ وَمَشَارِبُ ۖ أَفَلَا يَشْكُرُونَ <span class="nomor">73</span></div>
    <div class="latin">Wa lahum feehaa manaa fi'u wa mashaarib; afalaa yashkuroon</div>
    <div class="terjemahan">Dan mereka memperoleh berbagai manfaat dan minuman darinya. Maka mengapa mereka tidak bersyukur?</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَاتَّخَذُوا مِن دُونِ اللَّهِ آلِهَةً لَّعَلَّهُمْ يُنصَرُونَ <span class="nomor">74</span></div>
    <div class="latin">Wattakhazoo min doonil laahi aalihatal la'allahum yunsaroon</div>
    <div class="terjemahan">Dan mereka mengambil sesembahan selain Allah agar mereka mendapat pertolongan.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">لَا يَسْتَطِيعُونَ نَصْرَهُمْ وَهُمْ لَهُمْ جُندٌ مُّحْضَرُونَ <span class="nomor">75</span></div>
    <div class="latin">Laa yastatee'oona nasrahum wa hum lahum jundum muhdaroon</div>
    <div class="terjemahan">Mereka (sesembahan) itu tidak dapat menolong mereka; padahal mereka itu menjadi tentara yang disiapkan untuk menjaga (sesembahan) itu.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">فَلَا يَحْزُنكَ قَوْلُهُمْ ۘ إِنَّا نَعْلَمُ مَا يُسِرُّونَ وَمَا يُعْلِنُونَ <span class="nomor">76</span></div>
    <div class="latin">Falaa yahzunka qawluhum; innaa na'lamu maa yusirroona wa maa yu'linoon</div>
    <div class="terjemahan">Maka jangan sampai ucapan mereka membuat engkau (Muhammad) bersedih hati. Sungguh, Kami mengetahui apa yang mereka rahasiakan dan apa yang mereka nyatakan.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">أَوَلَمْ يَرَ الْإِنسَانُ أَنَّا خَلَقْنَاهُ مِن نُّطْفَةٍ فَإِذَا هُوَ خَصِيمٌ مُّبِينٌ <span class="nomor">77</span></div>
    <div class="latin">Awalam yaral insaanu annaa khalaqnaahu min nutfatin fa-izaa huwa khaseemum mubeen</div>
    <div class="terjemahan">Dan tidakkah manusia memperhatikan bahwa Kami menciptakannya dari setetes mani, ternyata dia menjadi musuh yang nyata!</div>
  </div>
  
  <div class="ayat">
    <div class="arab">وَضَرَبَ لَنَا مَثَلًا وَنَسِيَ خَلْقَهُ ۖ قَالَ مَن يُحْيِي الْعِظَامَ وَهِيَ رَمِيمٌ <span class="nomor">78</span></div>
    <div class="latin">Wa daraba lanaa maslanw-wa nasiya khalqahoo qaala mai-yuhyil'izaama wa hiya rameem</div>
    <div class="terjemahan">Dan dia membuat perumpamaan bagi Kami dan melupakan asal kejadiannya; dia berkata, “Siapakah yang dapat menghidupkan tulang-belulang, yang telah hancur luluh?”</div>
  </div>
  
  <div class="ayat">
    <div class="arab">قُلْ يُحْيِيهَا الَّذِي أَنشَأَهَا أَوَّلَ مَرَّةٍ ۖ وَهُوَ بِكُلِّ خَلْقٍ عَلِيمٌ <span class="nomor">79</span></div>
    <div class="latin">Qul yuh yeehal lazeee ansha ahaaa awwala marrah; wa Huwa bikulli khalqin 'Aleem</div>
    <div class="terjemahan">Katakanlah (Muhammad), “Yang akan menghidupkannya ialah (Allah) yang menciptakannya pertama kali. Dan Dia Maha Mengetahui tentang segala makhluk,</div>
  </div>
  
  <div class="ayat">
    <div class="arab">الَّذِي جَعَلَ لَكُم مِّنَ الشَّجَرِ الْأَخْضَرِ نَارًا فَإِذَا أَنتُم مِّنْهُ تُوقِدُونَ <span class="nomor">80</span></div>
    <div class="latin">Allazee ja'ala lakum minash shajaril akhdari naaran fa-izaaa antum minhu tooqidoon</div>
    <div class="terjemahan">yaitu (Allah) yang menjadikan api untukmu dari kayu yang hijau, maka seketika itu kamu nyalakan (api) dari kayu itu.”</div>
  </div>
  
  <div class="ayat">
    <div class="arab">أَوَلَيْسَ الَّذِي خَلَقَ السَّمَاوَاتِ وَالْأَرْضَ بِقَادِرٍ عَلَىٰ أَن يَخْلُقَ مِثْلَهُم ۚ بَلَىٰ وَهُوَ الْخَلَّاقُ الْعَلِيمُ <span class="nomor">81</span></div>
    <div class="latin">Awa laisal lazee khalaqas samaawaati wal arda biqaadirin 'alaaa ai-yakhluqa mislahum; balaa wa Huwal Khallaaqul 'Aleem</div>
    <div class="terjemahan">Dan bukankah (Allah) yang menciptakan langit dan bumi, mampu menciptakan kembali yang serupa itu (jasad mereka yang sudah hancur itu)? Benar, dan Dia Maha Pencipta, Maha Mengetahui.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">إِنَّمَا أَمْرُهُ إِذَا أَرَادَ شَيْئًا أَن يَقُولَ لَهُ كُن فَيَكُونُ <span class="nomor">82</span></div>
    <div class="latin">Innamaa amruhooo izaaa araada shai'an ai-yaqoola lahoo kun fa-yakoon</div>
    <div class="terjemahan">Sesungguhnya urusan-Nya apabila Dia menghendaki sesuatu Dia hanya berkata kepadanya, “Jadilah!” Maka jadilah sesuatu itu.</div>
  </div>
  
  <div class="ayat">
    <div class="arab">فَسُبْحَانَ الَّذِي بِيَدِهِ مَلَكُوتُ كُلِّ شَيْءٍ وَإِلَيْهِ تُرْجَعُونَ <span class="nomor">83</span></div>
    <div class="latin">Fa Subhaanal lazee biyadihee malakootu kulli shai-inw-wa ilaihi turja'oon</div>
    <div class="terjemahan">Maka Mahasuci (Allah) yang di tangan-Nya kekuasaan atas segala sesuatu dan kepada-Nya kamu dikembalikan.</div>
  </div>
  
</div>

@endsection