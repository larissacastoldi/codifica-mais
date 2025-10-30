SELECT ho.nome_completo, a.nome_completo, h.titulo, r.deletado_em FROM reservas r
JOIN hospedes ho ON r.id_hospede = ho.id_hospede
JOIN hospedagens h ON r.id_hospedagem = h.id_hospedagem
JOIN anfitrioes a ON h.id_anfitriao = a.id_anfitriao
WHERE r.deletado_em IS NOT NULL; # todos que tem data de deletado = 0