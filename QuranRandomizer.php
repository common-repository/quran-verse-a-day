<?php

class QuranRandomizer
{
    private $quran = array(
        1 => array(
            "verse" => 7,
            "name" => "Fatihah (the Opening)"
            ),
        2 => array(
            "verse" => 286,
            "name" => "Al-Baqarah (the Cow)"
            ),
        3 => array(
            "verse" => 200,
            "name" => "Aali Imran (the Family of Imran)"
            ),
        4 => array(
            "verse" => 176,
            "name" => "An-Nisa’ (the Women)"
            ),
        5 => array(
            "verse" => 120,
            "name" => "Al-Ma’idah (the Table)"
            ),
        6 => array(
            "verse" => 165,
            "name" => "Al-An’am (the Cattle)"
            ),
        7 => array(
            "verse" => 206,
            "name" => "Al-A’raf (the Heights)"
            ),
        8 => array(
            "verse" => 75,
            "name" => "Al-Anfal (the Spoils of War)"
            ),
        9 => array(
            "verse" => 129,
            "name" => "At-Taubah (the Repentance)"
            ),
        10 => array(
            "verse" => 109,
            "name" => "Yunus (Yunus)"
            ),
        11 => array(
            "verse" => 123,
            "name" => "Hud (Hud)"
            ),
        12 => array(
            "verse" => 111,
            "name" => "Yusuf (Yusuf)"
            ),
        13 => array(
            "verse" => 43,
            "name" => "Ar-Ra’d (the Thunder)"
            ),
        14 => array(
            "verse" => 52,
            "name" => "Ibrahim (Ibrahim)"
            ),
        15 => array(
            "verse" => 99,
            "name" => "Al-Hijr (the Rocky Tract)"
            ),
        16 => array(
            "verse" => 128,
            "name" => "An-Nahl (the Bees)"
            ),
        17 => array(
            "verse" => 111,
            "name" => "Al-Isra’ (the Night Journey)"
            ),
        18 => array(
            "verse" => 110,
            "name" => "Al-Kahf (the Cave)"
            ),
        19 => array(
            "verse" => 98,
            "name" => "Maryam (Maryam)"
            ),
        20 => array(
            "verse" => 135,
            "name" => "Ta-Ha (Ta-Ha)"
            ),
        21 => array(
            "verse" => 112,
            "name" => "Al-Anbiya’ (the Prophets)"
            ),
        22 => array(
            "verse" => 78,
            "name" => "Al-Haj (the Pilgrimage)"
            ),
        23 => array(
            "verse" => 118,
            "name" => "Al-Mu’minun (the Believers)"
            ),
        24 => array(
            "verse" => 64,
            "name" => "An-Nur (the Light)"
            ),
        25 => array(
            "verse" => 77,
            "name" => "Al-Furqan (the Criterion)"
            ),
        26 => array(
            "verse" => 222,
            "name" => "Ash-Shu’ara’ (the Poets)"
            ),
        27 => array(
            "verse" => 93,
            "name" => "An-Naml (the Ants)"
            ),
        28 => array(
            "verse" => 88,
            "name" => "Al-Qasas (the Stories)"
            ),
        29 => array(
            "verse" => 69,
            "name" => "Al-Ankabut (the Spider)"
            ),
        30 => array(
            "verse" => 60,
            "name" => "Ar-Rum (the Romans)"
            ),
        31 => array(
            "verse" => 34,
            "name" => "Luqman (Luqman)"
            ),
        32 => array(
            "verse" => 30,
            "name" => "As-Sajdah (the Prostration)"
            ),
        33 => array(
            "verse" => 73,
            "name" => "Al-Ahzab (the Combined Forces)"
            ),
        34 => array(
            "verse" => 54,
            "name" => "Saba’ (the Sabeans)"
            ),
        35 => array(
            "verse" => 45,
            "name" => "Al-Fatir (the Originator)"
            ),
        36 => array(
            "verse" => 83,
            "name" => "Ya-Sin (Ya-Sin)"
            ),
        37 => array(
            "verse" => 181,
            "name" => "As-Saffah (Those Ranges in Ranks)"
            ),
        38 => array(
            "verse" => 88,
            "name" => "Sad (Sad)"
            ),
        39 => array(
            "verse" => 75,
            "name" => "Az-Zumar (the Groups)"
            ),
        40 => array(
            "verse" => 85,
            "name" => "Ghafar (the Forgiver)"
            ),
        41 => array(
            "verse" => 54,
            "name" => "Fusilat (Distinguished)"
            ),
        42 => array(
            "verse" => 53,
            "name" => "Ash-Shura (the Consultation)"
            ),
        43 => array(
            "verse" => 89,
            "name" => "Az-Zukhruf (the Gold)"
            ),
        44 => array(
            "verse" => 58,
            "name" => "Ad-Dukhan (the Smoke)"
            ),
        45 => array(
            "verse" => 37,
            "name" => "Al-Jathiyah (the Kneeling)"
            ),
        46 => array(
            "verse" => 35,
            "name" => "Al-Ahqaf (the Valley)"
            ),
        47 => array(
            "verse" => 38,
            "name" => "Muhammad (Muhammad)"
            ),
        48 => array(
            "verse" => 29,
            "name" => "Al-Fat’h (the Victory)"
            ),
        49 => array(
            "verse" => 18,
            "name" => "Al-Hujurat (the Dwellings)"
            ),
        50 => array(
            "verse" => 45,
            "name" => "Qaf (Qaf)"
            ),
        51 => array(
            "verse" => 60,
            "name" => "Adz-Dzariyah (the Scatterers)"
            ),
        52 => array(
            "verse" => 47,
            "name" => "At-Tur (the Mount)"
            ),
        53 => array(
            "verse" => 62,
            "name" => "An-Najm (the Star)"
            ),
        54 => array(
            "verse" => 55,
            "name" => "Al-Qamar (the Moon)"
            ),
        55 => array(
            "verse" => 78,
            "name" => "Ar-Rahman (the Most Gracious)"
            ),
        56 => array(
            "verse" => 96,
            "name" => "Al-Waqi’ah (the Event)"
            ),
        57 => array(
            "verse" => 29,
            "name" => "Al-Hadid (the Iron)"
            ),
        58 => array(
            "verse" => 22,
            "name" => "Al-Mujadilah (the Reasoning)"
            ),
        59 => array(
            "verse" => 24,
            "name" => "Al-Hashr (the Gathering)"
            ),
        60 => array(
            "verse" => 13,
            "name" => "Al-Mumtahanah (the Tested)"
            ),
        61 => array(
            "verse" => 14,
            "name" => "As-Saf (the Row)"
            ),
        62 => array(
            "verse" => 11,
            "name" => "Al-Jum’ah (Friday)"
            ),
        63 => array(
            "verse" => 11,
            "name" => "Al-Munafiqun (the Hypocrites)"
            ),
        64 => array(
            "verse" => 18,
            "name" => "At-Taghabun (the Loss & Gain)"
            ),
        65 => array(
            "verse" => 12,
            "name" => "At-Talaq (the Divorce)"
            ),
        66 => array(
            "verse" => 12,
            "name" => "At-Tahrim (the Prohibition)"
            ),
        67 => array(
            "verse" => 30,
            "name" => "Al-Mulk – (the Kingdom)"
            ),
        68 => array(
            "verse" => 52,
            "name" => "Al-Qalam (the Pen)"
            ),
        69 => array(
            "verse" => 52,
            "name" => "Al-Haqqah (the Inevitable)"
            ),
        70 => array(
            "verse" => 44,
            "name" => "Al-Ma’arij (the Elevated Passages)"
            ),
        71 => array(
            "verse" => 28,
            "name" => "Nuh (Nuh)"
            ),
        72 => array(
            "verse" => 28,
            "name" => "Al-Jinn (the Jinn)"
            ),
        73 => array(
            "verse" => 20,
            "name" => "Al-Muzammil (the Wrapped)"
            ),
        74 => array(
            "verse" => 56,
            "name" => "Al-Mudaththir (the Cloaked)"
            ),
        75 => array(
            "verse" => 40,
            "name" => "Al-Qiyamah (the Resurrection)"
            ),
        76 => array(
            "verse" => 31,
            "name" => "Al-Insan (the Human)"
            ),
        77 => array(
            "verse" => 50,
            "name" => "Al-Mursalat (Those Sent Forth)"
            ),
        78 => array(
            "verse" => 40,
            "name" => "An-Naba’ (the Great News)"
            ),
        79 => array(
            "verse" => 44,
            "name" => "An-Nazi’at (Those Who Pull Out)"
            ),
        80 => array(
            "verse" => 42,
            "name" => "‘Abasa (He Frowned)"
            ),
        81 => array(
            "verse" => 29,
            "name" => "At-Takwir (the Overthrowing)"
            ),
        82 => array(
            "verse" => 19,
            "name" => "Al-Infitar (the Cleaving)"
            ),
        83 => array(
            "verse" => 36,
            "name" => "Al-Mutaffifin (Those Who Deal in Fraud)"
            ),
        84 => array(
            "verse" => 25,
            "name" => "Al-Inshiqaq (the Splitting Asunder)"
            ),
        85 => array(
            "verse" => 22,
            "name" => "Al-Buruj (the Stars)"
            ),
        86 => array(
            "verse" => 17,
            "name" => "At-Tariq (the Nightcomer)"
            ),
        87 => array(
            "verse" => 19,
            "name" => "Al-A’la (the Most High)"
            ),
        88 => array(
            "verse" => 26,
            "name" => "Al-Ghashiyah (the Overwhelming)"
            ),
        89 => array(
            "verse" => 30,
            "name" => "Al-Fajr (the Dawn)"
            ),
        90 => array(
            "verse" => 20,
            "name" => "Al-Balad (the City)"
            ),
        91 => array(
            "verse" => 15,
            "name" => "Ash-Shams (the Sun)"
            ),
        92 => array(
            "verse" => 21,
            "name" => "Al-Layl (the Night)"
            ),
        93 => array(
            "verse" => 11,
            "name" => "Adh-Dhuha (the Forenoon)"
            ),
        94 => array(
            "verse" => 8,
            "name" => "Al-Inshirah (the Opening Forth)"
            ),
        95 => array(
            "verse" => 8,
            "name" => "At-Tin (the Fig)"
            ),
        96 => array(
            "verse" => 19,
            "name" => "Al-‘Alaq (the Clot)"
            ),
        97 => array(
            "verse" => 5,
            "name" => "Al-Qadar (the Night of Decree)"
            ),
        98 => array(
            "verse" => 8,
            "name" => "Al-Bayinah (the Proof)"
            ),
        99 => array(
            "verse" => 8,
            "name" => "Az-Zalzalah (the Earthquake)"
            ),
        100 => array(
            "verse" => 11,
            "name" => "Al-‘Adiyah (the Runners)"
            ),
        101 => array(
            "verse" => 11,
            "name" => "Al-Qari’ah (the Striking Hour)"
            ),
        102 => array(
            "verse" => 8,
            "name" => "At-Takathur (the Piling Up)"
            ),
        103 => array(
            "verse" => 3,
            "name" => "Al-‘Asr (the Time)"
            ),
        104 => array(
            "verse" => 9,
            "name" => "Al-Humazah (the Slanderer)"
            ),
        105 => array(
            "verse" => 5,
            "name" => "Al-Fil (the Elephant)"
            ),
        106 => array(
            "verse" => 4,
            "name" => "Quraish (Quraish)"
            ),
        107 => array(
            "verse" => 7,
            "name" => "Al-Ma’un (the Assistance)"
            ),
        108 => array(
            "verse" => 3,
            "name" => "Al-Kauthar (the River of Abundance)"
            ),
        109 => array(
            "verse" => 6,
            "name" => "Al-Kafirun (the Disbelievers)"
            ),
        110 => array(
            "verse" => 3,
            "name" => "An-Nasr (the Help)"
            ),
        111 => array(
            "verse" => 5,
            "name" => "Al-Masad (the Palm Fiber)"
            ),
        112 => array(
            "verse" => 4,
            "name" => "Al-Ikhlas (the Sincerity)"
            ),
        113 => array(
            "verse" => 5,
            "name" => "Al-Falaq (the Daybreak)"
            ),
        114 => array(
            "verse" => 6,
	        "name" => "An-Nas (Mankind)"
	        )
    );

    public function getRandomSura()
    {
        return rand(1,114);
    }

    public function getRandomAyat($sura)
    {
        return rand(1, $this->quran[$sura]["verse"]);
    }

    public function getSuraName($suraNumber)
    {
        return $this->quran[$suraNumber]["name"];
    }
}
