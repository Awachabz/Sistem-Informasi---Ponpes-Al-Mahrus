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

  .wrap-mulk {
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

<div class="wrap-mulk">

  <div class="source-link">
    Sumber : 
    <a href="https://quran.nu.or.id/al-mulk" target="_blank">
      https://quran.nu.or.id/al-mulk
    </a>
  </div>

<h1>سُورَةُ الْمُلْك</h1>


<!-- Bismillah -->
<div class="ayat">
  <div class="arab">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</div>
  <div class="latin">bismillāhir-raḥmānir-raḥīm</div>
  <div class="terjemahan">Dengan nama Allah Yang Maha Pengasih, Maha Penyayang</div>
</div>

<div class="ayat">
  <div class="arab">تَبَارَكَ الَّذِي بِيَدِهِ الْمُلْكُ وَهُوَ عَلَىٰ كُلِّ شَيْءٍ قَدِيرٌ <span class="nomor">١</span></div>
  <div class="latin">tabārakallażī biyadihil-mulku wa huwa ‘alā kulli syai’in qadīr</div>
  <div class="terjemahan">Maha suci Allah yang di tangan-Nya segala kerajaan, dan Dia Maha Kuasa atas segala sesuatu.</div>
</div>

<div class="ayat">
  <div class="arab">الَّذِي خَلَقَ الْمَوْتَ وَالْحَيَاةَ لِيَبْلُوَكُمْ أَيُّكُمْ أَحْسَنُ عَمَلًا ۚ وَهُوَ الْعَزِيزُ الْغَفُورُ <span class="nomor">٢</span></div>
  <div class="latin">allażī khalaqal-mauta wal-ḥayāta liyabluwakum ayyukum aḥsanu ‘amalā, wa huwal-‘azīzul-ghafūr</div>
  <div class="terjemahan">Yang menciptakan mati dan hidup untuk menguji kamu, siapa di antara kamu yang lebih baik amalnya. Dia Maha Perkasa, Maha Pengampun.</div>
</div>

<div class="ayat">
  <div class="arab">الَّذِي خَلَقَ سَبْعَ سَمَاوَاتٍ طِبَاقًا ۖ مَّا تَرَىٰ فِي خَلْقِ الرَّحْمٰنِ مِن تَفَاوُتٍ ۖ فَارْجِعِ الْبَصَرَ هَلْ تَرَىٰ مِن فُطُورٍ <span class="nomor">٣</span></div>
  <div class="latin">allażī khalaqa sab‘a samāwātin ṭibāqā, mā tarā fī khalqir-raḥmāni min tafāwut, farji‘il-baṣara hal tarā min fuṭūr</div>
  <div class="terjemahan">Yang menciptakan tujuh langit berlapis-lapis. Kamu tidak akan melihat sesuatu yang tidak seimbang pada ciptaan Tuhan Yang Maha Pengasih. Maka lihatlah sekali lagi, adakah kamu lihat sesuatu yang cacat?</div>
</div>

<div class="ayat">
  <div class="arab">ثُمَّ ارْجِعِ الْبَصَرَ كَرَّتَيْنِ يَنقَلِبْ إِلَيْكَ الْبَصَرُ خَاسِئًا وَهُوَ حَسِيرٌ <span class="nomor">٤</span></div>
  <div class="latin">tsummarji‘il-baṣara karrataini yanqalib ilaikal-baṣaru khāsi-an wa huwa ḥasīr</div>
  <div class="terjemahan">Kemudian ulangi pandanganmu dua kali lagi, niscaya pandanganmu akan kembali kepadamu dalam keadaan lelah dan kecewa.</div>
</div>

<div class="ayat">
  <div class="arab">وَلَقَدْ زَيَّنَّا السَّمَاءَ الدُّنْيَا بِمَصَابِيحَ وَجَعَلْنَاهَا رُجُومًا لِّلشَّيَاطِينِ وَأَعْتَدْنَا لَهُمْ عَذَابَ السَّعِيرِ <span class="nomor">٥</span></div>
  <div class="latin">walaqad zayyannas-samā’ad-dunyā bi maṣābīḥa wa ja‘alnāhā rujūmal-lisysyayāṭīn, wa a‘tidnā lahum ‘ażābas-sa‘īr</div>
  <div class="terjemahan">Dan sungguh, telah Kami hiasi langit dunia dengan bintang-bintang, dan Kami jadikannya sebagai alat pelempar setan, dan Kami sediakan bagi mereka azab neraka yang menyala-nyala.</div>
</div>

<div class="ayat">
  <div class="arab">وَلِلَّذِينَ كَفَرُوا بِرَبِّهِمْ عَذَابُ جَهَنَّمَ ۖ وَبِئْسَ الْمَصِيرُ <span class="nomor">٦</span></div>
  <div class="latin">wa lillażīna kafarū birabbihim ‘ażābu jahannam, wa bi’sal-maṣīr</div>
  <div class="terjemahan">Dan bagi orang-orang yang kufur kepada Tuhannya, azab Jahanam; dan itulah seburuk-buruk tempat kembali.</div>
</div>

<div class="ayat">
  <div class="arab">إِذَا أُلْقُوا فِيهَا سَمِعُوا لَهَا شَهِيقًا وَهِيَ تَفُورُ <span class="nomor">٧</span></div>
  <div class="latin">iżā ulqū fīhā sami‘ū lahā syahīqan wa hiya tafūr</div>
  <div class="terjemahan">Ketika mereka dilemparkan ke dalamnya, mereka mendengar suara neraka yang mengerikan, sedang ia menggelegak.</div>
</div>

<div class="ayat">
  <div class="arab">تَكَادُ تَمَيَّزُ مِنَ الْغَيْظِ ۖ كُلَّمَا أُلْقِيَ فِيهَا فَوْجٌ سَأَلَهُمْ خَزَنَتُهَا أَلَمْ يَأْتِكُمْ نَذِيرٌ <span class="nomor">٨</span></div>
  <div class="latin">takādu tamayyazu minal-ghayẓ, kulla mā ulqiya fīhā fawjun sa’alahum khazanatuhā alam ya’tikum naḏīr</div>
  <div class="terjemahan">Hampir-hampir (neraka itu) pecah karena marah. Setiap kali sekumpulan orang dilemparkan ke dalamnya, penjaganya bertanya, “Bukankah telah datang kepada kamu seorang pemberi peringatan?”</div>
</div>

<div class="ayat">
  <div class="arab">قَالُوا بَلَىٰ قَدْ جَاءَنَا نَذِيرٌ فَكَذَّبْنَا وَقُلْنَا مَا نَزَّلَ اللّٰهُ مِن شَيْءٍ إِنْ أَنتُمْ إِلَّا فِي ضَلَالٍ كَبِيرٍ <span class="nomor">٩</span></div>
  <div class="latin">qālū balā qad jā’anā naḏīr fa każżabnā wa qulna mā nazzalallāhu min syai’, in antum illā fī ḍalālin kabīr</div>
  <div class="terjemahan">Mereka menjawab, “Benar, sungguh telah datang kepada kami seorang pemberi peringatan, tetapi kami mendustakannya dan kami katakan, ‘Allah tidak menurunkan sesuatu pun. Kamu hanyalah dalam kesesatan yang besar.’”</div>
</div>

<div class="ayat">
  <div class="arab">وَقَالُوا لَوْ كُنَّا نَسْمَعُ أَوْ نَعْقِلُ مَا كُنَّا فِي أَصْحَابِ السَّعِيرِ <span class="nomor">١٠</span></div>
  <div class="latin">wa qālū lau kunnā nasma‘u aw na‘qilu mā kunnā fī aṣḥābis-sa‘īr</div>
  <div class="terjemahan">Dan mereka berkata, “Sekiranya dahulu kami mendengar atau memikirkan (peringatan itu), niscaya kami tidak termasuk penghuni neraka yang menyala-nyala.”</div>
</div>

<div class="ayat">
  <div class="arab">فَاعْتَرَفُوا بِذَنبِهِمْ فَسُحْقًا لِّأَصْحَابِ السَّعِيرِ <span class="nomor">١١</span></div>
  <div class="latin">fa‘tarafū biżanbihim fa suḥqan li’aṣḥābis-sa‘īr</div>
  <div class="terjemahan">Maka mereka mengakui dosa mereka. Maka jauhlah (dari rahmat Allah) penghuni neraka yang menyala-nyala itu.</div>
</div>

<div class="ayat">
  <div class="arab">إِنَّ الَّذِينَ يَخْشَوْنَ رَبَّهُم بِالْغَيْبِ لَهُم مَّغْفِرَةٌ وَأَجْرٌ كَبِيرٌ <span class="nomor">١٢</span></div>
  <div class="latin">inna allażīna yakhsyawna rabbahum bil-ghaibi lahum maghfiratun wa ajrun kabīr</div>
  <div class="terjemahan">Sesungguhnya orang-orang yang takut kepada Tuhan mereka yang tidak tampak oleh mereka, bagi mereka ampunan dan pahala yang besar.</div>
</div>

<div class="ayat">
  <div class="arab">وَأَسِرُّوا قَوْلَكُمْ أَوِ اجْهَرُوا بِهِ ۖ إِنَّهُ عَلِيمٌ بِذَاتِ الصُّدُورِ <span class="nomor">١٣</span></div>
  <div class="latin">wa asirrū qawlakum awijharū bih, innahu ‘alīmun biḏātis-ṣudūr</div>
  <div class="terjemahan">Kamu boleh merahasiakan ucapanmu atau mengeraskannya; sesungguhnya Dia Maha Mengetahui segala isi hati.</div>
</div>

<div class="ayat">
  <div class="arab">أَلَا يَعْلَمُ مَنْ خَلَقَ وَهُوَ اللَّطِيفُ الْخَبِيرُ <span class="nomor">١٤</span></div>
  <div class="latin">alā ya‘lamu man khalaq, wa huwal-laṭīful-khabīr</div>
  <div class="terjemahan">Apakah (pencipta) tidak mengetahui? Dia Maha Halus, Maha Mengetahui.</div>
</div>

<div class="ayat">
  <div class="arab">هُوَ الَّذِي جَعَلَ لَكُمُ الْأَرْضَ ذَلُولًا فَامْشُوا فِي مَنَاكِبِهَا وَكُلُوا مِن رِّزْقِهِ ۖ وَإِلَيْهِ النُّشُورُ <span class="nomor">١٥</span></div>
  <div class="latin">huwa allażī ja‘ala lakumul-arḍa żalūlā famsyū fī manākibihā wa kulū mir rizqih, wa ilaihin-nusyūr</div>
  <div class="terjemahan">Dialah yang menjadikan bumi itu mudah bagimu, maka berjalanlah di segala penjurunya, dan makanlah dari rezeki-Nya. Dan hanya kepada-Nya kamu (kembali) dibangkitkan.</div>
</div>

<div class="ayat">
  <div class="arab">أَأَمِنتُم مَّن فِي السَّمَاءِ أَن يَخْسِفَ بِكُمُ الْأَرْضَ فَإِذَا هِيَ تَمُورُ <span class="nomor">١٦</span></div>
  <div class="latin">a amintum man fis-samā’i an yakhṣifa bikumul-arḍa fa iżā hiya tamūr</div>
  <div class="terjemahan">Apakah kamu merasa aman terhadap Zat Yang di langit bahwa Dia akan membuat bumi menelan kamu, sehingga tiba-tiba bumi itu bergoncang?</div>
</div>

<div class="ayat">
  <div class="arab">أَمْ أَمِنتُم مَّن فِي السَّمَاءِ أَن يُرْسِلَ عَلَيْكُمْ حَاصِبًا ۖ فَسَتَعْلَمُونَ كَيْفَ نَذِيرِ <span class="nomor">١٧</span></div>
  <div class="latin">am amintum man fis-samā’i ayy ursila ‘alaikum ḥāṣibā, fa sata‘lamūna kaifa naḏīr</div>
  <div class="terjemahan">Ataukah kamu merasa aman terhadap Zat Yang di langit bahwa Dia akan mengirimkan badai berbatu kepada kamu? Maka kelak kamu akan mengetahui bagaimana (akibat) peringatan-Ku.</div>
</div>

<div class="ayat">
  <div class="arab">وَلَقَدْ كَذَّبَ الَّذِينَ مِن قَبْلِهِمْ فَكَيْفَ كَانَ نَكِيرِ <span class="nomor">١٨</span></div>
  <div class="latin">walaqad każżaba allażīna min qablihim, fa kaifa kāna nakīr</div>
  <div class="terjemahan">Sungguh, orang-orang sebelum mereka telah mendustakan (rasul-rasul). Maka betapa dahsyatnya azab-Ku!</div>
</div>

<div class="ayat">
  <div class="arab">أَوَلَمْ يَرَوْا إِلَى الطَّيْرِ فَوْقَهُمْ صَافَّاتٍ وَيَقْبِضْنَ ۚ مَا يُمْسِكُهُنَّ إِلَّا الرَّحْمٰنُ ۚ إِنَّهُ بِكُلِّ شَيْءٍ بَصِيرٌ <span class="nomor">١٩</span></div>
  <div class="latin">a walam yarau ilat-ṭairi fauqahum ṣāffātin wa yaqbiḍn, mā yumsikuhunna illar-raḥmān, innahu bikulli syai’in baṣīr</div>
  <div class="terjemahan">Tidakkah mereka memperhatikan burung-burung yang membentangkan dan mengatupkan sayapnya di atas mereka? Tidak ada yang menahannya (di udara) kecuali Tuhan Yang Maha Pengasih. Sesungguhnya Dia Maha Melihat segala sesuatu.</div>
</div>

<div class="ayat">
  <div class="arab">أَمَّنْ هَٰذَا الَّذِي هُوَ جُندٌ لَّكُمْ يَنصُرُكُم مِّن دُونِ الرَّحْمٰنِ ۚ إِنِ الْكَافِرُونَ إِلَّا فِي غُرُورٍ <span class="nomor">٢٠</span></div>
  <div class="latin">amman hāża allażī huwa jundul-lakum yanṣurukum min dūnir-raḥmān, inil-kāfirūna illā fī ghurūr</div>
  <div class="terjemahan">Siapakah dia (selain Allah) yang menjadi tentara bagimu yang dapat menolongmu selain Allah Yang Maha Pengasih? Orang-orang kafir itu hanya berada dalam tipuan.</div>
</div>

<div class="ayat">
  <div class="arab">أَمَّنْ هَٰذَا الَّذِي يَرْزُقُكُمْ إِنْ أَمْسَكَ رِزْقَهُ ۚ بَل لَّجُّوا فِي عُتُوٍّ وَنُفُورٍ <span class="nomor">٢١</span></div>
  <div class="latin">amman hāża allażī yarzuqukum in amsaka rizqah, bal lajjū fī ‘utuwin wa nufūr</div>
  <div class="terjemahan">Atau siapakah dia (selain Allah) yang memberi rezeki kepadamu jika Allah menahan rezeki-Nya? Tetapi mereka terus saja dalam kesombongan dan berpaling.</div>
</div>

<div class="ayat">
  <div class="arab">أَفَمَن يَمْشِي مُكِبًّا عَلَىٰ وَجْهِهِ أَهْدَىٰ أَمَّن يَمْشِي سَوِيًّا عَلَىٰ صِرَاطٍ مُّسْتَقِيمٍ <span class="nomor">٢٢</span></div>
  <div class="latin">a faman yamsyī mukibban ‘alā wajhihī ahdā amman yamsyī sawiyyan ‘alā ṣirāṭim mustaqīm</div>
  <div class="terjemahan">Maka apakah orang yang berjalan dengan wajah tertelungkup lebih mendapat petunjuk daripada orang yang berjalan tegak di jalan yang lurus?</div>
</div>

<div class="ayat">
  <div class="arab">قُلْ هُوَ الَّذِي أَنشَأَكُمْ وَجَعَلَ لَكُمُ السَّمْعَ وَالْأَبْصَارَ وَالْأَفْئِدَةَ ۖ قَلِيلًا مَّا تَشْكُرُونَ <span class="nomor">٢٣</span></div>
  <div class="latin">qul huwa allażī ansya’akum wa ja‘ala lakumus-sam‘a wal-abṣāra wal-af’idah, qalīlan mā tasykurūn</div>
  <div class="terjemahan">Katakanlah, “Dialah yang menciptakan kamu dan menjadikan pendengaran, penglihatan, dan hati bagimu. (Tetapi) sedikit sekali kamu bersyukur.”</div>
</div>

<div class="ayat">
  <div class="arab">قُلْ هُوَ الَّذِي ذَرَأَكُمْ فِي الْأَرْضِ وَإِلَيْهِ تُحْشَرُونَ <span class="nomor">٢٤</span></div>
  <div class="latin">qul huwa allażī żara-akum fil-arḍi wa ilaihi tuḥsyarūn</div>
  <div class="terjemahan">Katakanlah, “Dialah yang menciptakan kamu di bumi dan hanya kepada-Nya kamu akan dikumpulkan.”</div>
</div>

<div class="ayat">
  <div class="arab">وَيَقُولُونَ مَتَىٰ هَٰذَا الْوَعْدُ إِن كُنتُمْ صَادِقِينَ <span class="nomor">٢٥</span></div>
  <div class="latin">wa yaqūlūna matā hāżal-wa‘du in kuntum ṣādiqīn</div>
  <div class="terjemahan">Mereka berkata, “Kapankah janji itu (hari kiamat) datang jika kamu orang-orang yang benar?”</div>
</div>

<div class="ayat">
  <div class="arab">قُلْ إِنَّمَا الْعِلْمُ عِندَ اللّٰهِ ۖ وَإِنَّمَا أَنَا نَذِيرٌ مُّبِينٌ <span class="nomor">٢٦</span></div>
  <div class="latin">qul innamal-‘ilmu ‘indallāh, wa innamā anā naḏīrum mubīn</div>
  <div class="terjemahan">Katakanlah, “Sesungguhnya pengetahuan tentang hari itu hanya di sisi Allah, dan aku hanyalah pemberi peringatan yang jelas.”</div>
</div>

<div class="ayat">
  <div class="arab">فَلَمَّا رَأَوْهُ زُلْفَةً سِيئَتْ وُجُوهُ الَّذِينَ كَفَرُوا وَقِيلَ هَٰذَا الَّذِي كُنتُم بِهِ تَدَّعُونَ <span class="nomor">٢٧</span></div>
  <div class="latin">falammā ra’auhu zulfatan sī’at wujuḥullażīna kafarū wa qīla hāżal-lażī kuntum bihī tadda‘ūn</div>
  <div class="terjemahan">Maka ketika mereka melihatnya (azab itu) sudah dekat, wajah orang-orang kafir itu menjadi muram, dan dikatakan, “Inilah (azab) yang dahulu kamu minta disegerakan.”</div>
</div>

<div class="ayat">
  <div class="arab">قُلْ أَرَأَيْتُمْ إِنْ أَهْلَكَنِيَ اللّٰهُ وَمَن مَّعِيَ أَوْ رَحِمَنَا فَمَن يُجِيرُ الْكَافِرِينَ مِنْ عَذَابٍ أَلِيمٍ <span class="nomor">٢٨</span></div>
  <div class="latin">qul ara-aitum in ahlakaniyallāhu wa man ma‘iya aw raḥimanā, famay yujīrul-kāfirīna min ‘ażābin alīm</div>
  <div class="terjemahan">Katakanlah, “Terangkan kepadaku jika Allah membinasakanku dan orang-orang yang bersamaku atau memberi rahmat kepada kami, siapa yang dapat melindungi orang-orang kafir dari azab yang pedih?”</div>
</div>

<div class="ayat">
  <div class="arab">قُلْ هُوَ الرَّحْمٰنُ آمَنَّا بِهِ وَعَلَيْهِ تَوَكَّلْنَا ۖ فَسَتَعْلَمُونَ مَنْ هُوَ فِي ضَلَالٍ مُّبِينٍ <span class="nomor">٢٩</span></div>
  <div class="latin">qul huwar-raḥmān, āmannā bihī wa ‘alaihi tawakkalnā, fa sata‘lamūna man huwa fī ḍalālin mubīn</div>
  <div class="terjemahan">Katakanlah, “Dialah Tuhan Yang Maha Pengasih; kami beriman kepada-Nya dan kepada-Nya kami bertawakal. Maka kelak kamu akan mengetahui siapa yang berada dalam kesesatan yang nyata.”</div>
</div>

<div class="ayat">
  <div class="arab">قُلْ أَرَأَيْتُمْ إِنْ أَصْبَحَ مَاؤُكُمْ غَوْرًا فَمَن يَأْتِيكُم بِمَاءٍ مَّعِينٍ <span class="nomor">٣٠</span></div>
  <div class="latin">qul ara-aitum in aṣbaḥa mā’ukum ghawran famay ya’tīkum bimā’im ma‘īn</div>
  <div class="terjemahan">Katakanlah, “Terangkan kepadaku jika air kalian menjadi tenggelam ke dalam bumi, siapakah yang akan mendatangkan air yang mengalir bagimu?”</div>
</div>

</div> <!-- penutup wrap -->
@endsection