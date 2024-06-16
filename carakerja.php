Value = sqrt(pow(($ra["Temperatur_Minimal"] - $Temperatur_Minimal), 2) + pow(($ra["Temperatur_Maximal"] - $Temperatur_Maximal), 2)
+ pow(($ra["Curah_Hujan"] - $Curah_Hujan), 2) + pow(($ra["Lama_Sinar_Matahari"] - $Lama_Sinar_Matahari), 2));


select Tanaman, COUNT(Tanaman) AS Tanamanfreq from hitung2 group by Tanaman order by Tanamanfreq DESC limit 1
