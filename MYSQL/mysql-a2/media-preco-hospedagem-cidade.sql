-- =Arquivo media-preco-hospedagem-cidade.sql: Calcule o valor total médio por dia das reservas, agrupado por cidade da hospedagem =--

SELECT h.cidade, ROUND(avg((r.valor_noite * r.noites) + r.taxa_limpeza + r.taxa_servico - r.desconto)) AS preco_medio_por_noite FROM reservas r
JOIN hospedagens h ON h.id_hospedagem = r.id_hospedagem
GROUP BY h.cidade