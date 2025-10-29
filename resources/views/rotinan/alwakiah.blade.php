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

  .wrap-surah {
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
</style

<div class="wrap-alwakiah">

<h1>سُورَةُ الْوَاقِعَةِ</h1>

  <div class="ayat">
    <div class="arab">إِذَا وَقَعَتِ الْوَاقِعَةُ <span class="nomor">1</span></div>
    <div class="latin">Idzā waqa‘atil wāqi‘ah</div>
    <div class="terjemahan">Apabila terjadi hari Kiamat,</div>
  </div>

  <div class="ayat">
    <div class="arab">لَيْسَ لِوَقْعَتِهَا كَاذِبَةٌ <span class="nomor">2</span></div>
    <div class="latin">Laisa liwaq‘atihā kādzibah</div>
    <div class="terjemahan">tidak seorang pun dapat berdusta tentang kejadiannya.</div>
  </div>

  <div class="ayat">
    <div class="arab">خَافِضَةٌ رَّافِعَةٌ <span class="nomor">3</span></div>
    <div class="latin">Khāfidhah rafi‘ah</div>
    <div class="terjemahan">(Kejadian itu) merendahkan (satu golongan) dan meninggikan (golongan yang lain).</div>
  </div>

  <div class="ayat">
    <div class="arab">إِذَا رُجَّتِ الْأَرْضُ رَجًّا <span class="nomor">4</span></div>
    <div class="latin">Idzā rujjatil ardu rajjā</div>
    <div class="terjemahan">Apabila bumi diguncangkan sedahsyat-dahsyatnya,</div>
  </div>

  <div class="ayat">
    <div class="arab">وَبُسَّتِ الْجِبَالُ بَسًّا <span class="nomor">5</span></div>
    <div class="latin">Wa bussatil jibālu bassā</div>
    <div class="terjemahan">dan gunung-gunung dihancurluluhkan sehancur-hancurnya,</div>
  </div>

  <div class="ayat">
    <div class="arab">فَكَانَتْ هَبَاءً مُّنبَثًّا <span class="nomor">6</span></div>
    <div class="latin">Fakānat habā’am munbatsā</div>
    <div class="terjemahan">maka jadilah ia debu yang beterbangan,</div>
  </div>

  <div class="ayat">
    <div class="arab">وَكُنتُمْ أَزْوَاجًا ثَلَاثَةً <span class="nomor">7</span></div>
    <div class="latin">Wa kuntum azwājan tsalātsah</div>
    <div class="terjemahan">dan kamu menjadi tiga golongan,</div>
  </div>

  <div class="ayat">
    <div class="arab">فَأَصْحَابُ الْمَيْمَنَةِ مَا أَصْحَابُ الْمَيْمَنَةِ <span class="nomor">8</span></div>
    <div class="latin">Fa as-hābul-maimanati mā as-hābul-maimanah</div>
    <div class="terjemahan">golongan kanan, alangkah mulianya golongan kanan itu,</div>
  </div>

  <div class="ayat">
    <div class="arab">وَأَصْحَابُ الْمَشْأَمَةِ مَا أَصْحَابُ الْمَشْأَمَةِ <span class="nomor">9</span></div>
    <div class="latin">Wa as-hābul-masy’amati mā as-hābul-masy’amah</div>
    <div class="terjemahan">dan golongan kiri, alangkah celakanya golongan kiri itu,</div>
  </div>

  <div class="ayat">
    <div class="arab">وَالسَّابِقُونَ السَّابِقُونَ <span class="nomor">10</span></div>
    <div class="latin">Was-sābiqūnas-sābiqūn</div>
    <div class="terjemahan">dan orang-orang yang paling dahulu (beriman), merekalah yang paling dahulu (masuk surga).</div>
  </div>

  <div class="ayat">
    <div class="arab">أُولَٰئِكَ الْمُقَرَّبُونَ <span class="nomor">11</span></div>
    <div class="latin">Ulā’ikal muqarrabūn</div>
    <div class="terjemahan">Mereka itulah yang didekatkan (kepada Allah),</div>
  </div>

  <div class="ayat">
    <div class="arab">فِي جَنَّاتِ النَّعِيمِ <span class="nomor">12</span></div>
    <div class="latin">Fī jannātin-na‘īm</div>
    <div class="terjemahan">berada dalam surga kenikmatan,</div>
  </div>

  <div class="ayat">
    <div class="arab">ثُلَّةٌ مِّنَ الْأَوَّلِينَ <span class="nomor">13</span></div>
    <div class="latin">Tsullatum minal awwalīn</div>
    <div class="terjemahan">segolongan besar dari orang-orang terdahulu,</div>
  </div>

  <div class="ayat">
    <div class="arab">وَقَلِيلٌ مِّنَ الْآخِرِينَ <span class="nomor">14</span></div>
    <div class="latin">Wa qalīlum minal ākhirīn</div>
    <div class="terjemahan">dan segolongan kecil dari orang-orang yang kemudian.</div>
  </div>

  <div class="ayat">
    <div class="arab">عَلَىٰ سُرُرٍ مَّوْضُونَةٍ <span class="nomor">15</span></div>
    <div class="latin">‘Alā sururin maudhūnah</div>
    <div class="terjemahan">Mereka berada di atas dipan-dipan yang bertatahkan emas dan permata,</div>
  </div>

  <div class="ayat">
    <div class="arab">مُّتَّكِئِينَ عَلَيْهَا مُتَقَابِلِينَ <span class="nomor">16</span></div>
    <div class="latin">Muttaki’īna ‘alayhā mutaqābilīn</div>
    <div class="terjemahan">mereka bertelekan di atasnya berhadap-hadapan.</div>
  </div>

  <div class="ayat">
    <div class="arab">يَطُوفُ عَلَيْهِمْ وِلْدَانٌ مُّخَلَّدُونَ <span class="nomor">17</span></div>
    <div class="latin">Yathūfu ‘alayhim wildānum mukhalladūn</div>
    <div class="terjemahan">Mereka dikelilingi oleh anak-anak muda yang tetap muda,</div>
  </div>

  <div class="ayat">
    <div class="arab">بِأَكْوَابٍ وَأَبَارِيقَ وَكَأْسٍ مِّن مَّعِينٍ <span class="nomor">18</span></div>
    <div class="latin">Bi-akwābin wa abārīqa wa ka’sim mim ma‘īn</div>
    <div class="terjemahan">dengan membawa gelas, cerek, dan piala berisi minuman dari mata air (surga),</div>
  </div>

  <div class="ayat">
    <div class="arab">لَا يُصَدَّعُونَ عَنْهَا وَلَا يُنزِفُونَ <span class="nomor">19</span></div>
    <div class="latin">Lā yushadda‘ūna ‘anhā wa lā yunzifūn</div>
    <div class="terjemahan">mereka tidak pening karenanya dan tidak mabuk,</div>
  </div>

  <div class="ayat">
    <div class="arab">وَفَاكِهَةٍ مِّمَّا يَتَخَيَّرُونَ <span class="nomor">20</span></div>
    <div class="latin">Wa fākihatim mimmā yatakhayyarūn</div>
    <div class="terjemahan">dan buah-buahan apa pun yang mereka pilih,</div>
  </div>

  <div class="ayat">
    <div class="arab">وَلَحْمِ طَيْرٍ مِّمَّا يَشْتَهُونَ <span class="nomor">21</span></div>
    <div class="latin">Wa lahmi thairim mimmā yashtahūn</div>
    <div class="terjemahan">dan daging burung apa pun yang mereka inginkan.</div>
  </div>

  <div class="ayat">
    <div class="arab">وَحُورٌ عِينٌ <span class="nomor">22</span></div>
    <div class="latin">Wa hūr ‘īn</div>
    <div class="terjemahan">Dan ada bidadari-bidadari bermata indah,</div>
  </div>

  <div class="ayat">
    <div class="arab">كَأَمْثَالِ اللُّؤْلُؤِ الْمَكْنُونِ <span class="nomor">23</span></div>
    <div class="latin">Ka amtsānil lu’lu’il maknūn</div>
    <div class="terjemahan">laksana mutiara yang tersimpan baik.</div>
  </div>

  <div class="ayat">
    <div class="arab">جَزَاءً بِمَا كَانُوا يَعْمَلُونَ <span class="nomor">24</span></div>
    <div class="latin">Jazā’an bimā kānū ya‘malūn</div>
    <div class="terjemahan">Sebagai balasan atas apa yang telah mereka kerjakan.</div>
  </div>

  <div class="ayat">
    <div class="arab">لَا يَسْمَعُونَ فِيهَا لَغْوًا وَلَا تَأْثِيمًا <span class="nomor">25</span></div>
    <div class="latin">Lā yasma‘ūna fīhā laghwan wa lā ta’tsīmā</div>
    <div class="terjemahan">Di dalamnya mereka tidak mendengar perkataan yang sia-sia maupun yang menimbulkan dosa,</div>
  </div>

  <div class="ayat">
    <div class="arab">إِلَّا قِيلًا سَلَامًا سَلَامًا <span class="nomor">26</span></div>
    <div class="latin">Illā qīlan salāman salāmā</div>
    <div class="terjemahan">kecuali ucapan salam sebagai penghormatan.</div>
  </div>

  <div class="ayat">
    <div class="arab">وَأَصْحَابُ الْيَمِينِ مَا أَصْحَابُ الْيَمِينِ <span class="nomor">27</span></div>
    <div class="latin">Wa ash-hābul yamīni mā ash-hābul yamīn</div>
    <div class="terjemahan">Dan golongan kanan, alangkah bahagianya golongan kanan itu,</div>
  </div>

  <div class="ayat">
    <div class="arab">فِي سِدْرٍ مَّخْضُودٍ <span class="nomor">28</span></div>
    <div class="latin">Fī sidrim makhdūd</div>
    <div class="terjemahan">mereka berada di antara pohon bidara yang tak berduri,</div>
  </div>

  <div class="ayat">
    <div class="arab">وَطَلْحٍ مَّنضُودٍ <span class="nomor">29</span></div>
    <div class="latin">Wa thalhim mandhūd</div>
    <div class="terjemahan">dan pohon pisang yang bersusun-susun buahnya,</div>
  </div>

  <div class="ayat">
    <div class="arab">وَظِلٍّ مَّمْدُودٍ <span class="nomor">30</span></div>
    <div class="latin">Wa zhillin mamdūd</div>
    <div class="terjemahan">dan naungan yang terbentang luas,</div>
  </div>

</div>

<div class="ayat">
  <div class="arab">وَفُرُشٍ مَّرْفُوعَةٍ <span class="nomor">31</span></div>
  <div class="latin">Wa furushim marfū‘ah</div>
  <div class="terjemahan">Dan kasur-kasur yang tinggi lagi empuk,</div>
</div>

<div class="ayat">
  <div class="arab">إِنَّآ أَنشَأْنَـٰهُنَّ إِنشَآءًۭ <span class="nomor">32</span></div>
  <div class="latin">Innâ ansya’nāhunna insyā’ā</div>
  <div class="terjemahan">Sesungguhnya Kami menciptakan mereka (bidadari-bidadari) dengan ciptaan yang istimewa,</div>
</div>

<div class="ayat">
  <div class="arab">فَجَعَلْنَـٰهُنَّ أَبْكَارًۭا <span class="nomor">33</span></div>
  <div class="latin">Faja‘alnāhunna abkārā</div>
  <div class="terjemahan">lalu Kami jadikan mereka gadis-gadis perawan,</div>
</div>

<div class="ayat">
  <div class="arab">عُرُبًۭا أَتْرَابًۭا <span class="nomor">34</span></div>
  <div class="latin">‘Uruban atrābā</div>
  <div class="terjemahan">penuh cinta lagi sebaya umurnya,</div>
</div>

<div class="ayat">
  <div class="arab">لِأَصْحَـٰبِ ٱلْمَيْمَنَةِ <span class="nomor">35</span></div>
  <div class="latin">Li asḥābil maimanah</div>
  <div class="terjemahan">untuk golongan kanan,</div>
</div>

<div class="ayat">
  <div class="arab">ثُلَّةٌۭ مِّنَ ٱلْأَوَّلِينَ <span class="nomor">36</span></div>
  <div class="latin">Ṯullatum minal awwalīn</div>
  <div class="terjemahan">sejumlah besar dari orang-orang terdahulu,</div>
</div>

<div class="ayat">
  <div class="arab">وَثُلَّةٌۭ مِّنَ ٱلْـَٔاخِرِينَ <span class="nomor">37</span></div>
  <div class="latin">Wa ṯullatum minal ākhirīn</div>
  <div class="terjemahan">dan sejumlah besar pula dari orang-orang kemudian.</div>
</div>

<div class="ayat">
  <div class="arab">وَأَصْحَـٰبُ ٱلشِّمَالِ مَآ أَصْحَـٰبُ ٱلشِّمَالِ <span class="nomor">38</span></div>
  <div class="latin">Wa aṣḥābusy-syimāli mā aṣḥābusy-syimāl</div>
  <div class="terjemahan">Dan golongan kiri, siapakah golongan kiri itu?</div>
</div>

<div class="ayat">
  <div class="arab">فِى سَمُومٍۢ وَحَمِيمٍۢ <span class="nomor">39</span></div>
  <div class="latin">Fī samūmin wa ḥamīm</div>
  <div class="terjemahan">Mereka berada dalam (siksaan) angin yang sangat panas dan air yang mendidih,</div>
</div>

<div class="ayat">
  <div class="arab">وَظِلٍّۢ مِّن يَحْمُومٍۢ <span class="nomor">40</span></div>
  <div class="latin">Wa ẓillin min yaḥmūm</div>
  <div class="terjemahan">dan dalam naungan asap yang hitam pekat,</div>
</div>

<div class="ayat">
  <div class="arab">لَّا بَارِدٍۢ وَلَا كَرِيمٍۢ <span class="nomor">41</span></div>
  <div class="latin">Lā bāridin wa lā karīm</div>
  <div class="terjemahan">tidak sejuk dan tidak menyenangkan.</div>
</div>

<div class="ayat">
  <div class="arab">إِنَّهُمْ كَانُوا۟ قَبْلَ ذَٰلِكَ مُتْرَفِينَ <span class="nomor">42</span></div>
  <div class="latin">Innahum kānū qabla żālika mutrafīn</div>
  <div class="terjemahan">Sesungguhnya mereka sebelum itu hidup bermewah-mewahan,</div>
</div>

<div class="ayat">
  <div class="arab">وَكَانُوا۟ يُصِرُّونَ عَلَى ٱلْحِنثِ ٱلْعَظِيمِ <span class="nomor">43</span></div>
  <div class="latin">Wa kānū yuṣirrūna ‘alal ḥinthil ‘aẓīm</div>
  <div class="terjemahan">dan mereka tetap bersikeras dalam dosa besar.</div>
</div>

<div class="ayat">
  <div class="arab">وَكَانُوا۟ يَقُولُونَ أَئِذَا مِتْنَا وَكُنَّا تُرَٰبًۭا وَعِظَـٰمًا أَئِنَّا لَمَبْعُوثُونَ <span class="nomor">44</span></div>
  <div class="latin">Wa kānū yaqūlūna a’iżā mitnā wa kunnā turāban wa ‘iẓāmā a’innā lamab‘ūṯūn</div>
  <div class="terjemahan">Dan mereka berkata, “Apakah apabila kami telah mati dan menjadi tanah serta tulang-belulang, apakah kami benar-benar akan dibangkitkan kembali?”</div>
</div>

<div class="ayat">
  <div class="arab">أَوَ ءَابَآؤُنَا ٱلْأَوَّلُونَ <span class="nomor">45</span></div>
  <div class="latin">Awa ābā’unal awwalūn</div>
  <div class="terjemahan">Apakah nenek moyang kami yang terdahulu juga (akan dibangkitkan)?”</div>
</div>

{{-- Lanjutan Surah Al-Waqi‘ah ayat 46–65 --}}

<div class="ayat">
  <div class="arab">قُلْ إِنَّ ٱلْأَوَّلِينَ وَٱلْـَٔاخِرِينَ <span class="nomor">46</span></div>
  <div class="latin">Qul innal awwalīna wal ākhirīn</div>
  <div class="terjemahan">Katakanlah, “Sesungguhnya orang-orang terdahulu dan yang kemudian,</div>
</div>

<div class="ayat">
  <div class="arab">لَمَجْمُوعُونَ إِلَىٰ مِيقَـٰتِ يَوْمٍۢ مَّعْلُومٍۢ <span class="nomor">47</span></div>
  <div class="latin">Lamajmū‘ūna ilā mīqāti yaumin ma‘lūm</div>
  <div class="terjemahan">benar-benar akan dikumpulkan pada waktu tertentu pada hari yang telah diketahui,”</div>
</div>

<div class="ayat">
  <div class="arab">ثُمَّ إِنَّكُمْ أَيُّهَا ٱلضَّآلُّونَ ٱلْمُكَذِّبُونَ <span class="nomor">48</span></div>
  <div class="latin">Ṯumma innakum ayyuhadh-dhāllūnal mukadzdzibūn</div>
  <div class="terjemahan">Kemudian sesungguhnya kamu wahai orang-orang yang sesat lagi mendustakan,</div>
</div>

<div class="ayat">
  <div class="arab">لَـَٔاكِلُونَ مِن شَجَرٍۢ مِّن زَقُّومٍۢ <span class="nomor">49</span></div>
  <div class="latin">Laākilūna min shajarin min zaqqūm</div>
  <div class="terjemahan">pasti akan memakan pohon zaqqum,</div>
</div>

<div class="ayat">
  <div class="arab">فَمَالِـُٔونَ مِنْهَا ٱلْبُطُونَ <span class="nomor">50</span></div>
  <div class="latin">Famāli’ūna minhāl buṭūn</div>
  <div class="terjemahan">lalu kamu akan memenuhi perutmu dengannya,</div>
</div>

<div class="ayat">
  <div class="arab">فَشَـٰرِبُونَ عَلَيْهِ مِنَ ٱلْحَمِيمِ <span class="nomor">51</span></div>
  <div class="latin">Fasyāribūna ‘alayhi minal ḥamīm</div>
  <div class="terjemahan">kemudian kamu akan minum di atasnya air yang sangat panas,</div>
</div>

<div class="ayat">
  <div class="arab">فَشَـٰرِبُونَ شُرْبَ ٱلْهِيمِ <span class="nomor">52</span></div>
  <div class="latin">Fasyāribūna syurba al-hīm</div>
  <div class="terjemahan">lalu kamu minum seperti unta yang sangat haus minum.</div>
</div>

<div class="ayat">
  <div class="arab">هَـٰذَا نُزُلُهُمْ يَوْمَ ٱلدِّينِ <span class="nomor">53</span></div>
  <div class="latin">Hāżā nuzuluhum yaumad dīn</div>
  <div class="terjemahan">Itulah hidangan mereka pada hari pembalasan.</div>
</div>

<div class="ayat">
  <div class="arab">نَحْنُ خَلَقْنَـٰكُمْ فَلَوْلَا تُصَدِّقُونَ <span class="nomor">54</span></div>
  <div class="latin">Naḥnu khalaqnākum falawlā tuṣaddiqūn</div>
  <div class="terjemahan">Kami telah menciptakan kamu, maka mengapa kamu tidak membenarkan (hari kebangkitan)?</div>
</div>

<div class="ayat">
  <div class="arab">أَفَرَءَيْتُم مَّا تُمْنُونَ <span class="nomor">55</span></div>
  <div class="latin">Afa ra’aytum mā tumnūn</div>
  <div class="terjemahan">Maka pernahkah kamu perhatikan (benih) yang kamu pancarkan?</div>
</div>

<div class="ayat">
  <div class="arab">ءَأَنتُمْ تَخْلُقُونَهُۥٓ أَمْ نَحْنُ ٱلْخَـٰلِقُونَ <span class="nomor">56</span></div>
  <div class="latin">A’antum takhluqūnahu am naḥnul khāliqūn</div>
  <div class="terjemahan">Kamukah yang menciptakannya, atau Kami yang menciptakannya?</div>
</div>

<div class="ayat">
  <div class="arab">نَحْنُ قَدَّرْنَا بَيْنَكُمُ ٱلْمَوْتَ وَمَا نَحْنُ بِمَسْبُوقِينَ <span class="nomor">57</span></div>
  <div class="latin">Naḥnu qaddarnā bainakumul mauta wa mā naḥnu bimasbūqīn</div>
  <div class="terjemahan">Kami telah menentukan kematian di antara kamu dan Kami tidak akan dikalahkan,</div>
</div>

<div class="ayat">
  <div class="arab">عَلَىٰٓ أَن نُّبَدِّلَ أَمْثَـٰلَكُمْ وَنُنشِئَكُمْ فِى مَا لَا تَعْلَمُونَ <span class="nomor">58</span></div>
  <div class="latin">‘Alā an nubaddila amṯālakum wa nunasyi’akum fīmā lā ta‘lamūn</div>
  <div class="terjemahan">untuk mengganti kamu dengan orang-orang yang seperti kamu dan menjadikan kamu (dalam bentuk) yang tidak kamu ketahui.</div>
</div>

<div class="ayat">
  <div class="arab">وَلَقَدْ عَلِمْتُمُ ٱلنَّشْأَةَ ٱلْأُولَىٰ فَلَوْلَا تَذَكَّرُونَ <span class="nomor">59</span></div>
  <div class="latin">Wa laqad ‘alimtumus-sya’atal ūlā falawlā tazakkarūn</div>
  <div class="terjemahan">Dan sesungguhnya kamu telah mengetahui penciptaan pertama, maka mengapa kamu tidak mengambil pelajaran?</div>
</div>

<div class="ayat">
  <div class="arab">أَفَرَءَيْتُم مَّا تَحْرُثُونَ <span class="nomor">60</span></div>
  <div class="latin">Afa ra’aytum mā taḥrūṯūn</div>
  <div class="terjemahan">Maka pernahkah kamu memperhatikan apa yang kamu tanam?</div>
</div>

<div class="ayat">
  <div class="arab">ءَأَنتُمْ تَزْرَعُونَهُۥٓ أَمْ نَحْنُ ٱلزَّٰرِعُونَ <span class="nomor">61</span></div>
  <div class="latin">A’antum tazra‘ūnahu am naḥnuzzāri‘ūn</div>
  <div class="terjemahan">Kamukah yang menumbuhkannya, atau Kami yang menumbuhkannya?</div>
</div>

<div class="ayat">
  <div class="arab">لَوْ نَشَآءُ لَجَعَلْنَـٰهُ حُطَـٰمًۭا فَظَلْتُمْ تَفَكَّهُونَ <span class="nomor">62</span></div>
  <div class="latin">Law nasyā’u laja‘alnāhu ḥuṭāman faẓaltum tafakkahūn</div>
  <div class="terjemahan">Sekiranya Kami kehendaki, benar-benar Kami jadikan ia hancur, maka kamu pun heran tercengang,</div>
</div>

<div class="ayat">
  <div class="arab">إِنَّا لَمُغْرَمُونَ <span class="nomor">63</span></div>
  <div class="latin">Innà lamughramūn</div>
  <div class="terjemahan">(sambil berkata), “Sesungguhnya kami benar-benar menderita kerugian,”</div>
</div>

<div class="ayat">
  <div class="arab">بَلْ نَحْنُ مَحْرُومُونَ <span class="nomor">64</span></div>
  <div class="latin">Bal naḥnu maḥrūmūn</div>
  <div class="terjemahan">bahkan kami tidak memperoleh hasil apa pun.”</div>
</div>

<div class="ayat">
  <div class="arab">أَفَرَءَيْتُمُ ٱلْمَآءَ ٱلَّذِى تَشْرَبُونَ <span class="nomor">65</span></div>
  <div class="latin">Afa ra’aytumul mā’alladzī tasyrabūn</div>
  <div class="terjemahan">Maka pernahkah kamu memperhatikan air yang kamu minum?</div>
</div>
  
  <div class="ayat">
    <div class="arab">لَوْ نَشَاءُ لَجَعَلْنَاهُ حُطَامًا فَظَلْتُمْ تَفَكَّهُونَ <span class="nomor">66</span></div>
    <div class="latin">Law nashā`u laja‘alnāhu ḥuṭāman faẓaltum tafakkahụn</div>
    <div class="terjemahan">Jika Kami kehendaki, pasti Kami jadikan (tanaman) itu hancur, maka kamu pun heran tercengang.</div>
  </div>

  <div class="ayat">
    <div class="arab">إِنَّا لَمُغْرَمُونَ <span class="nomor">67</span></div>
    <div class="latin">Innā lamughramụn</div>
    <div class="terjemahan">(Sambil berkata), “Sungguh, kami benar-benar menderita kerugian.”</div>
  </div>

  <div class="ayat">
    <div class="arab">بَلْ نَحْنُ مَحْرُومُونَ <span class="nomor">68</span></div>
    <div class="latin">Bal naḥnu maḥrụmụn</div>
    <div class="terjemahan">Bahkan kami tidak memperoleh apa pun (hasil panen).</div>
  </div>

  <div class="ayat">
    <div class="arab">أَفَرَأَيْتُمُ الْمَاءَ الَّذِي تَشْرَبُونَ <span class="nomor">69</span></div>
    <div class="latin">Afa ra`aitumul-mā`al-ladzī tasyrabụn</div>
    <div class="terjemahan">Maka terangkanlah kepadaku tentang air yang kamu minum,</div>
  </div>

  <div class="ayat">
    <div class="arab">أَأَنتُمْ أَنزَلْتُمُوهُ مِنَ الْمُزْنِ أَمْ نَحْنُ الْمُنزِلُونَ <span class="nomor">70</span></div>
    <div class="latin">A-antum anzaltumụhu minal-muzni am naḥnul-munzilụn</div>
    <div class="terjemahan">Kamukah yang menurunkannya dari awan, atau Kami yang menurunkannya?</div>
  </div>

  <div class="ayat">
    <div class="arab">لَوْ نَشَاءُ جَعَلْنَاهُ أُجَاجًا فَلَوْلَا تَشْكُرُونَ <span class="nomor">71</span></div>
    <div class="latin">Law nashā`u ja‘alnāhu ujājan falau lā tasykurụn</div>
    <div class="terjemahan">Jika Kami kehendaki, niscaya Kami jadikan air itu asin, maka mengapa kamu tidak bersyukur?</div>
  </div>

  <div class="ayat">
    <div class="arab">أَفَرَأَيْتُمُ النَّارَ الَّتِي تُورُونَ <span class="nomor">72</span></div>
    <div class="latin">Afa ra`aitumun-nāral-latī tụrụn</div>
    <div class="terjemahan">Maka terangkanlah kepadaku tentang api yang kamu nyalakan (dari kayu).</div>
  </div>

  <div class="ayat">
    <div class="arab">أَأَنتُمْ أَنشَأْتُمْ شَجَرَتَهَا أَمْ نَحْنُ الْمُنشِئُونَ <span class="nomor">73</span></div>
    <div class="latin">A-antum ansya`tum syajaratahā am naḥnul-munsyi`ụn</div>
    <div class="terjemahan">Kamukah yang menjadikan kayunya, atau Kami yang membuatnya?</div>
  </div>

  <div class="ayat">
    <div class="arab">نَحْنُ جَعَلْنَاهَا تَذْكِرَةً وَمَتَاعًا لِّلْمُقْوِينَ <span class="nomor">74</span></div>
    <div class="latin">Naḥnu ja‘alnāhā tażkiratan wa matā‘al lil-muqwīn</div>
    <div class="terjemahan">Kami menjadikannya peringatan dan bahan yang berguna bagi orang-orang yang bermukim di padang pasir.</div>
  </div>

  <div class="ayat">
    <div class="arab">فَسَبِّحْ بِاسْمِ رَبِّكَ الْعَظِيمِ <span class="nomor">75</span></div>
    <div class="latin">Fasabbiḥ bismi rabbikal-‘aẓīm</div>
    <div class="terjemahan">Maka bertasbihlah dengan (menyebut) nama Tuhanmu Yang Mahabesar.</div>
  </div>

  <div class="ayat">
    <div class="arab">فَلَا أُقْسِمُ بِمَوَاقِعِ النُّجُومِ <span class="nomor">76</span></div>
    <div class="latin">Falā uqsimu bimawāqi‘in-nujụm</div>
    <div class="terjemahan">Maka Aku bersumpah dengan tempat beredarnya bintang-bintang,</div>
  </div>

  <div class="ayat">
    <div class="arab">وَإِنَّهُ لَقَسَمٌ لَّوْ تَعْلَمُونَ عَظِيمٌ <span class="nomor">77</span></div>
    <div class="latin">Wa innahụ laqasamul law ta‘lamụna ‘aẓīm</div>
    <div class="terjemahan">dan sesungguhnya itu benar-benar sumpah yang besar kalau kamu mengetahui,</div>
  </div>

  <div class="ayat">
    <div class="arab">إِنَّهُ لَقُرْآنٌ كَرِيمٌ <span class="nomor">78</span></div>
    <div class="latin">Innahụ laqur`ānun karīm</div>
    <div class="terjemahan">sesungguhnya (Al-Qur’an) itu adalah bacaan yang mulia,</div>
  </div>

  <div class="ayat">
    <div class="arab">فِي كِتَابٍ مَّكْنُونٍ <span class="nomor">79</span></div>
    <div class="latin">Fī kitābim maknụn</div>
    <div class="terjemahan">yang tersimpan dalam kitab yang terpelihara (Lauh Mahfuz),</div>
  </div>

  <div class="ayat">
    <div class="arab">لَّا يَمَسُّهُ إِلَّا الْمُطَهَّرُونَ <span class="nomor">80</span></div>
    <div class="latin">Lā yamassuhū illal-muṭahharụn</div>
    <div class="terjemahan">tidak ada yang menyentuhnya selain hamba-hamba yang disucikan,</div>
  </div>

  <div class="ayat">
    <div class="arab">تَنزِيلٌ مِّن رَّبِّ الْعَالَمِينَ <span class="nomor">81</span></div>
    <div class="latin">Tanzīlum mir rabbil-‘ālamīn</div>
    <div class="terjemahan">diturunkan dari Tuhan semesta alam.</div>
  </div>

  <div class="ayat">
    <div class="arab">أَفَبِهَٰذَا الْحَدِيثِ أَنتُم مُّدْهِنُونَ <span class="nomor">82</span></div>
    <div class="latin">Afa bihāżal-ḥadīṡi antum mud'hinụn</div>
    <div class="terjemahan">Maka apakah kamu menganggap remeh berita ini (Al-Qur’an)?</div>
  </div>

  <div class="ayat">
    <div class="arab">وَتَجْعَلُونَ رِزْقَكُمْ أَنَّكُمْ تُكَذِّبُونَ <span class="nomor">83</span></div>
    <div class="latin">Wa taj‘alụna rizqakum annakum tukażżibụn</div>
    <div class="terjemahan">Dan kamu menjadikan rezekimu bahwa kamu mendustakan (Allah)?</div>
  </div>

  <div class="ayat">
    <div class="arab">فَلَوْلَا إِذَا بَلَغَتِ الْحُلْقُومَ <span class="nomor">84</span></div>
    <div class="latin">Falau lā iżā balaġatil-ḥulqụm</div>
    <div class="terjemahan">Maka mengapa ketika (nyawa) sampai di kerongkongan,</div>
  </div>

  <div class="ayat">
    <div class="arab">وَأَنتُمْ حِينَئِذٍ تَنظُرُونَ <span class="nomor">85</span></div>
    <div class="latin">Wa antum ḥīna`iżin tanẓurụn</div>
    <div class="terjemahan">dan kamu pada waktu itu melihat,</div>
  </div>

  <div class="ayat">
    <div class="arab">وَنَحْنُ أَقْرَبُ إِلَيْهِ مِنكُمْ وَلَٰكِن لَّا تُبْصِرُونَ <span class="nomor">86</span></div>
    <div class="latin">Wa naḥnu aqrabu ilaihi minkum walākin lā tubṣirụn</div>
    <div class="terjemahan">dan Kami lebih dekat kepadanya daripada kamu, tetapi kamu tidak melihat,</div>
  </div>

  <div class="ayat">
    <div class="arab">فَلَوْلَا إِن كُنتُمْ غَيْرَ مَدِينِينَ <span class="nomor">87</span></div>
    <div class="latin">Falau lā in kuntum ġaira madīnīn</div>
    <div class="terjemahan">maka mengapa jika kamu tidak dikuasai (oleh Allah),</div>
  </div>

  <div class="ayat">
    <div class="arab">تَرْجِعُونَهَا إِن كُنتُمْ صَادِقِينَ <span class="nomor">88</span></div>
    <div class="latin">Tarji‘ụnahā in kuntum ṣādiqīn</div>
    <div class="terjemahan">kamu tidak mengembalikan (nyawa itu) jika kamu orang yang benar?</div>
  </div>

  <div class="ayat">
    <div class="arab">فَأَمَّا إِن كَانَ مِنَ الْمُقَرَّبِينَ <span class="nomor">89</span></div>
    <div class="latin">Fa ammā in kāna minal-muqarrabīn</div>
    <div class="terjemahan">Adapun jika dia termasuk orang-orang yang didekatkan (kepada Allah),</div>
  </div>

  <div class="ayat">
    <div class="arab">فَرَوْحٌ وَرَيْحَانٌ وَجَنَّتُ نَعِيمٍ <span class="nomor">90</span></div>
    <div class="latin">Farauḥuw wa raiḥānuw wa jannatu na‘īm</div>
    <div class="terjemahan">maka dia memperoleh ketenteraman, rezeki, dan surga penuh kenikmatan.</div>
  </div>

  <div class="ayat">
    <div class="arab">وَأَمَّا إِن كَانَ مِنْ أَصْحَابِ الْيَمِينِ <span class="nomor">91</span></div>
    <div class="latin">Wa ammā in kāna min aṣḥābil-yamīn</div>
    <div class="terjemahan">Dan adapun jika dia termasuk golongan kanan,</div>
  </div>

  <div class="ayat">
    <div class="arab">فَسَلَامٌ لَّكَ مِنْ أَصْحَابِ الْيَمِينِ <span class="nomor">92</span></div>
    <div class="latin">Fasalamul laka min aṣḥābil-yamīn</div>
    <div class="terjemahan">maka keselamatan bagimu dari golongan kanan.</div>
  </div>

  <div class="ayat">
    <div class="arab">وَأَمَّا إِن كَانَ مِنَ الْمُكَذِّبِينَ الضَّالِّينَ <span class="nomor">93</span></div>
    <div class="latin">Wa ammā in kāna minal-mukażżibīnaḍ-ḍāllīn</div>
    <div class="terjemahan">Dan adapun jika dia termasuk orang-orang yang mendustakan lagi sesat,</div>
  </div>

  <div class="ayat">
    <div class="arab">فَنُزُلٌ مِّنْ حَمِيمٍ <span class="nomor">94</span></div>
    <div class="latin">Fanuzulum min ḥamīm</div>
    <div class="terjemahan">maka dia mendapat hidangan dari air yang mendidih,</div>
  </div>

  <div class="ayat">
    <div class="arab">وَتَصْلِيَةُ جَحِيمٍ <span class="nomor">95</span></div>
    <div class="latin">Wa taṣliyyatu jaḥīm</div>
    <div class="terjemahan">dan dibakar di dalam neraka.</div>
  </div>

  <div class="ayat">
    <div class="arab">إِنَّ هَٰذَا لَهُوَ حَقُّ الْيَقِينِ <span class="nomor">96</span></div>
    <div class="latin">Inna hāżā lahuwa ḥaqqūl yaqīn</div>
    <div class="terjemahan">Sungguh, (semua itu) adalah kebenaran yang pasti.</div>
  </div>

</div>

@endsection
