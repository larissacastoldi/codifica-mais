SELECT h.nome_completo AS nome_hospede, ho.titulo AS titulo_hospedagem, r.status_id AS status_reserva FROM reservas r
JOIN hospedes h ON r.id_hospede = h.id_hospede
JOIN hospedagens ho ON r.id_hospedagem = ho.id_hospedagem;