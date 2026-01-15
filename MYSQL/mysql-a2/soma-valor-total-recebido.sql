-- Arquivo soma-valor-total-recebido.sql:Mostre o valor total recebido com base nas reservas não deletadas, somando apenas o
-- valor da diária multiplicado pelo número de noites.
SELECT 
    sum(reservas.valor_noite) as soma_de_todas_as_noites
from reservas 
where reservas.deletado_em IS NULL



