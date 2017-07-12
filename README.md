# Precificação de Produtos
Um dos desafios mais comuns com que se deparam empreendedores que estão iniciando um novo negócio diz respeito à precificação, ou seja, como estipular os preços daqueles produtos que irão oferecer aos seus clientes. Existem diferentes formas de se definir quanto a empresa irá cobrar por seus produtos, sendo 3 as principais: a precificação baseada em custos, a precificação baseada na concorrência e a precificação baseada na demanda.

Baseado neste problema e visando auxiliar na formação de preços dos produtos, resolvemos disponibilizar uma API REST para ser utilizada e melhorada por toda a Comunidade, sob Licença BSD. De início utilizaremos a forma de precificação baseada em custos para cálculos de preço de venda, de custo, de margem de lucro e de encargos sobre o preço de venda.

A precificação baseada em custos consiste em determinar um percentual e adicionar ao custo total do produto

Roteiro básico para formação de preços
---------------------------------------
Para quem está começando a se familiarizar com o tema formação de preços, é útil  conhecer um método  simplificado para calcular o preço de venda.
O método apresentado a seguir visa transmitir os conceitos fundamentais e o processo básico de cálculo do preço de venda. São apresentados também os pontos que podem ser tratados com maior detalhamento quando se pretende uma abordagem mais completa do assunto.
As etapas para cálculo do preço são as seguintes:

1. Levantamento do custo do que se pretende precificar.

    O custo para formação do preço de venda é formado por duas parcelas: custo direto e custo indireto.
    
    O custo direto é o valor dos gastos exclusivos para fabricar ou vender o produto. Por exemplo, para uma loja o custo direto de um produto vendido corresponde ao valor pago ao fornecedor pela compra desse produto. Os encargos sobre vendas (comissões, impostos e perdas eventuais) embora sejam custos diretos, não entrarão nesse cálculo. Serão considerados à parte porque eles incidem sobre o preço de venda.
    
    O Custo indireto corresponde aos gastos comuns a todos os produtos  ou serviços e que são distribuídos por cada um deles de acordo com algum critério. Um exemplo típico de custo indireto são os gastos com a administração (aluguel, salários do pessoal de apoio administrativo, etc.). Existem vários critérios para fazer os rateio do custo indireto pelos produtos. Deve ser escolhido o critério que melhor reflita como cada produto consome uma parte desse custo indireto. O critério pode ser a participação percentual do produto no faturamento, a participação percentual da quantidade do produto na quantidade total vendida, etc.
    
    Supondo que um hipotético produto A tenha um custo direto de R$ 240,00 e um custo indireto de R$ 80,00, seu custo total unitário será de R$ 320,00 (R$ 240,00 mais R$ 80,00).
    
2. Cálculo dos encargos sobre o preço de venda

    O percentual de comissões sobre vendas normalmente é conhecido, não apresentando maiores dificuldades de quantificação. Caso a empresa espere algum tipo de perda sobre a venda, como por exemplo, inadimplência definitiva, precisará estimar um percentual médio com base em sua experiência passada.
    
    Para os impostos, é usada a carga tributária total  de cada produto ou serviço. Em alguns impostos, o valor a ser recolhido é menor do que a alíquota normal  em virtude da existência de crédito fiscal oriundo da compras anteriores no processo de produção ou venda. Nesses casos, será considerada a alíquota líquida do imposto. Assim, os encargos sobre a venda de um produto ou serviços será a soma dos percentuais de comissão  sobre vendas, de perdas com venda e de carga tributária líquida.
    
    Supondo que a empresa pague uma comissão aos vendedores de 2% sobre o valor das vendas, espere uma perda média definitiva por inadimplência de 0,5% e tenha uma carga tributária líquida 23,5% para o hipotético produto A, o percentual de encargos sobre vendas será: 2% + 0,5% + 23,5% = 26%
    
3. Determinação da margem de lucro

    O preço a ser praticado precisa gerar certa margem de lucro para a empresa. Essa margem de lucro, também chamada de <i>mark up</i>, pode ser calculada sobre o preço de venda ou sobre o custo unitário de produção. A determinação da margem de lucro é uma das decisões mais importantes no processo de precificação. Se a margem for pequena poderá produzir um resultado financeiro insatisfatório. Se for muito alta poderá acarretar perda de vendas gerando também um resultado ruim.
    
    Um bom indicador para a determinação da margem de lucro é o seguinte: numa empresa bem administrada, de qualquer porte e de qualquer segmento, o lucro final anual normalmente não passa de 15% sobre o capital próprio. Assim se a empresa tem um capital próprio  de R$ 1.000,000,00 (tudo o que ela tem menos tudo o que ela deve, num quadro de normalidade), o lucro anual esperado com a venda de todos seus produtos  ou serviços será, normalmente, no máximo R$ 150.000,00 (15% ao ano).
    
    A maiorias das empresas em todo mundo estabelece como meta de retorno o percentual de 15% ao ano sobre seu capital próprio. A margem de lucro ou <i>mark up</i> corresponde ao  percentual a ser acrescido ao custo unitário (essa é a prática mais usual) de modo a produzir a meta de retorno estabelecida para o capital próprio. A margem de lucro também pode ser calculada de modo a gerar um determinado valor de lucro mensal ou anual – R$ 60.000,00 por mês, por exemplo. Em alguns casos a empresa aplica a margem de lucro habitualmente usada pelos concorrentes. Tanto o lucro em valor absoluto como a margem de lucro copiada dos  concorrentes não podem ser adotados de modo totalmente livre. Precisam ser avaliados em termos de razoabilidade.
    
    Suponhamos que a empresa constate que aplicando uma margem de 28,7% sobre o custo total unitário de seus produtos para formar o preço de venda (margem sobre o custo), ela atinja  sua meta de retorno.
    
    Agora temos os elementos para o cálculo do preço de venda do produto A.
    
4. Formação do preço

    O preço do produto ou serviço a ser calculado deve seguir o seguinte raciocínio: O preço de venda menos os encargos sobre o preço de venda é igual ao custo total unitário mais a margem de lucro sobre esse custo total unitário.
    
    Sejam:<br/>
    P = preço de venda<br/>
    E = percentual de encargos  incidentes sobre o preço de venda<br/>
    C = custo total unitário<br/>
    M = percentual  da margem de lucro a ser aplicada sobre o custo total unitário
    
    Assim, temos:<br/>
    P - P x E = C + C x M
    
    Colocando P e C em evidência, temos:<br/>
    P(1- E) = C(1 + M)
    
    O valor de P será:<br/>
    P = C(1 + M) ÷  (1- E)
    
    Considerando os dados do produto A, seu preço de venda será:<br/>
    P = 320,00(1 + 0,287) ÷ (1 - 0,26)<br/>
    P = 556,54
    
    Abertura do preço:<br/>
    Encargos sobre o preço (26%) = 144,70<br/>
    Custo unitário total do produto = 320,00
    
    Margem de lucro:<br/>
    556,54 – (320,00 + 144,70) = 91,84<br/>
    A margem de lucro de 91,84 representa 28,7% do custo unitário do produto (320,00), como se pretendia.

Referências:<br/>
KOTLER, P.; KELLER, K. L. Administração de Marketing. 14. ed. São Paulo: Pearson Education do Brasil, 2012.
ZEITHAML, V. A.; BITNER, M. J.; GREMLER, D. D. Marketing de Serviços: A Empresa com Foco no Cliente. 5. ed. Porto Alegre: Bookman, 2011.
SANTOS, E. O. Instituto de Estudos Financeiros - IEF. (http://www.ief.com.br/forpreco.htm)
