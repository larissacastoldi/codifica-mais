
SELECT a.nome_completo AS nome_anfitriao,
COUNT(h.id_hospedagem) AS total_hospedagens FROM anfitrioes a
JOIN hospedagens h ON a.id_anfitriao = h.id_anfitriao
GROUP BY a.nome_completo
ORDER BY total_hospedagens DESC