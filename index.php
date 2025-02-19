<?php
$lang = $_GET['lang'];
echo($lang);
?>
<?php ob_start("ob_gzhandler"); ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>ICB.la</title>

		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

		<meta name="description" content="Somos uma sociedade de participações que busca e aplica novas formas de gestão. Promovemos a conexão colaborativa e qualitativa em rede dos diferentes saberes para compartilhar conhecimento, estimular aprendizado contínuo e desenvolver empresas na perspectiva da economia criativa.">
		<meta name="keywords" content="icb, gestão, conexão, redes, conhecimento, compartilhar, aprendizado">

		<meta property="og:url" content="http://icb.la/">
		<meta property="og:title" content="ICB.la">
		<meta property="og:image" content="http://www.icb.la/img/icb.png">
		<meta property="og:site_name" content="ICB.la">
		<meta property="og:description" content="Somos uma sociedade de participações que busca e aplica novas formas de gestão. Promovemos a conexão colaborativa e qualitativa em rede dos diferentes saberes para compartilhar conhecimento, estimular aprendizado contínuo e desenvolver empresas na perspectiva da economia criativa.">

		<link rel="stylesheet" href="css/estilo.css">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

		<!-- INÍCIO DO GOOGLE ANALYTICS -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m	
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga')	
			ga('create', 'UA-24437642-1', 'auto');
			ga('send', 'pageview');
		</script>
		<!-- FIM DO GOOGLE ANALYTICS -->
	</head>
	<body>
		<?php 
		if ($_GET["codLa"] == '') {
			$mostra_la = "none";
		}
		else {
			$mostra_la = "block";
		}
		?>
		<div class="wrapper">
			<h1 class="center">ICB.la</h1>

			<section id="main-nav">
				<nav class="center home">
					<ul class="tablet-monitor clearfix">
						<li><a class="bios" href="javascript:;">Bios</a></li>
						<li><a class="p2p" href="javascript:;">P2P</a></li>
						<li><a class="network" href="javascript:;">Network</a></li>
						<li><a class="idea" href="javascript:;">Idea</a></li>
						<li><a class="la" href="javascript:;">Lá</a></li>
					</ul>

					<ul id="menuMobile" class="mobile clearfix">
						<li><a class="p2p" href="javascript:;">P2P</a></li>
						<li><a class="network" href="javascript:;">Network</a></li>
						<li><a class="bios" href="javascript:;">Bios</a></li>
						<li><a class="idea" href="javascript:;">Idea</a></li>
						<li><a class="la" href="javascript:;">Lá</a></li>

					</ul>
				</nav>
			</section>

		    <section class="conteudo">
			<!-- BIOS -->
				<!-- PORTUGUES -->
				<section id="bios" class="area bios toggle pt">
					<h2 class="titulo titulo7 mobile">Bios</h2>
					<a href="javascript:;" class="bandeira eua">English</a>
					<div class="container center">
						<h2 class="titulo titulo1">
							<span class="frase1">Não é sobre ideias</span> <span class="frase2">é sobre fazer ideias acontecerem</span>
						</h2>

						<div class="col1 left">
							<dl class="box valores">
								<dt class="titulo titulo3">O que nos move?</dt>
								<dd>Multiplicar experiências, possibilidades e oportunidades.</dd>

								<dt class="titulo titulo3">Como fazemos isso?</dt>
								<dd>Por meio de empresas digitais e inovadoras que conectam o online ao offline.</dd>

								<dt class="titulo titulo3">O que fazemos?</dt>
								<dd>Somos uma sociedade de participações que busca e aplica novas formas de gestão. Promovemos a conexão colaborativa e qualitativa em rede dos diferentes saberes para compartilhar conhecimento, estimular aprendizado contínuo e desenvolver empresas na perspectiva da economia criativa.</dd>
							</dl>

							<section class="box principio">
								<h2 class="titulo titulo4">Princípio (prin-cí-pio), s. m.</h2>
								<ul>
									<li>O que vem primeiro, origem, início, começo.</li>
									<li>A essência, o fundamento de algo.</li>
									<li>Suposição ou proposição fundamental.</li>
									<li>(Plural) regra moral, norma de conduta.</li>
								</ul>
								<p>Wikcionário<br>
								dicionário universal de conteúdo livre</p>
							</section>

							<section class="box frases"></section>

							<section class="significado">
								<h2 class="titulo titulo3">ICB.LA</h2>
								<p>O nome ICB é emblemático. “ICB” é uma sigla? É a inicial dos sócios? É uma abreviação? Não temos um significado único. Na verdade, “ICB” é um conceito em aberto a ser preenchido pela imaginação de cada um. Queríamos um endereço de internet curto, fácil de memorizar.</p>

								<p>Assim como “ICB”, o ponto LA (.LA) pode adquirir diversas interpretações. O acrônimo pode significar Latin America, Los Angeles, Laos, Louisiana, ou ainda livre arbítrio, Lei Abolicionista, Lei Áurea e etc. No entanto, o mais interessante é o sentido de referência que o “.LA” traz. Queremos criar uma empresa “lá”, uma empresa com o pensamento à frente, que percorre diversos caminhos, mas que tem um objetivo certo e que aponta para o novo.</p>
							</section>
						</div>

						<div class="col2 right txt-right">
							<div class="box ilustracao arvore"></div>

							<dl class="box">
								<dt class="titulo titulo3">Por que não?</dt>
								<dd>O ICB surgiu de uma pergunta. Por que não? Por que não é possível conciliar trabalho e prazer, realização profissional com realização pessoal? Por que toda relação empresarial tem que ser vantajosa apenas para um dos lados? Por que não estabelecer relações de trabalho baseadas em parceria e em interesses comuns? Por que um negócio tem que estar focado somente em baixar custos e aumentar a velocidade para maximizar ganhos? Por que competir e não… colaborar?</dd>

								<dt class="titulo titulo3">Sócios</dt>
								<dd>Com formações, experiências profissionais e trajetórias distintas, porém com uma ideia em comum: fazer diferente. Mais do que pensar uma nova empresa, o desafio foi criar esta nova empresa.</dd>

								<dt class="titulo titulo3">Modelo</dt>
								<dd>Não acreditamos em modelos pré-formatados. Acreditamos na inteligência colaborativa. Por isso, trabalhamos em rede baseada nas relações de confiança. O capital intelectual multidisciplinar do ICB reúne os indivíduos em prol do coletivo em um ambiente dinâmico, promovendo inovação por meio da reorganização da informação.</dd>
							</dl>

							<div class="ilustracao icb-big"></div>
						</div>

						<h2 class="titulo titulo2 box">Juntamos as possibilidades do online com o offline</h2>

						<div class="col1 left">
							<div class="ilustracao religious box"></div>

							<section class="box planejamento">
								<h3 class="titulo titulo3">penso, logo posso mudar de opinião</h3>
								<p>Estamos em constante movimento. Corrigimos rotas, pontos de vista e opiniões. O processo de reconhecer o que precisa ser melhorado, alterado, revisado é fundamental, pois nos ajuda a aprimorar a experiência de nossos usuários.</p>

								<p>Acreditamos no planejamento. No entanto, consideramos que o planejamento precisa estar alinhado à execução e ter a flexibilidade de identificar as mudanças e se adaptar a elas, propondo novas soluções com agilidade. Trabalhamos com uma gama de metodologias contemporâneas, buscando um processo de desenvolvimento interativo e incremental para gerenciamento de projetos complexos, nos quais é impossível predizer tudo o que irá ocorrer. São sprints curtos, com revisões periódicas.</p>

								<p>Isso significa que estamos permanentemente envolvidos em todos os projetos, em graus diferentes, em momentos diferentes. O comprometimento dos sócios e associados é total.</p>
							</section>
						</div>

						<div class="col2 right txt-right">
							<section class="icb-p2p box">
								<h2 class="titulo titulo3">Empresa p2p (peer-to-peer)</h2>
								<p>Crescer com responsabilidade e sustentabilidade seria o mínimo para uma empresa evoluir. Para o ICB, uma empresa “lá”, o crescimento precisa também ser orgânico e  estar atrelado a conexões de interesses e valores sinérgicos, alinhados à cultura da qualidade.</p>

								<p>Somos uma empresa P2P, operamos em rede. Para nós, cada usuário tem um papel importante e contribui com recursos diversos em condições de igualdade, respeitando suas características.</p>

								<p>O ICB cultiva as diferenças individuais, as competências específicas e a contribuição que cada uma das partes pode oferecer para um objetivo comum: multiplicar. Monetizamos a conseqüência de um trabalho bem feito, e principalmente, feito com prazer.</p>
							</section>

							<div class="ilustracao cubo"></div>
						</div>

						<section class="area-mapa tablet-monitor clearfix">
							<section class="mapa left">
								<h3 class="titulo titulo3">Mapa</h3>
								<p>Neste processo de crescimento e de construção de relacionamentos, precisamos de um mapa, que nos oriente para onde vamos, que guie nossa trajetória e garanta que nossas estratégias tenham um sentido. Este mapa são os nossos princípios, resumidos em cinco valores:</p>
								<ul>
									<li>
										<a href="javascript:;" class="clearfix">
											<span id="divum" class="item um">1</span> <span class="frase">Conectar online e offline</span>
										</a>
									</li>
									<li>
										<a href="javascript:;" class="clearfix">
											<span id="divdois" class="item dois">2</span> <span class="frase">Somar saberes e experiências</span>
										</a>
									</li>
									<li>
										<a href="javascript:;" class="clearfix">
											<span id="divtres" class="item tres">3</span> <span class="frase item3">Compartilhar conhecimento para multiplicar possibilidade</span>
										</a>
									</li>
									<li>
										<a href="javascript:;" class="clearfix">
											<span id="divquatro" class="item quatro">4</span> <span class="frase mg-top">Simplificar a vida</span>
										</a>
									</li>
									<li>
										<a href="javascript:;" class="clearfix">
											<span id="divcinco" class="item cinco">5</span> <span class="frase mg-top">Inovar</span>
										</a>
									</li>
								</ul>
							</section>

							<section class="mapa-right um">
								<h2 class="titulo titulo3">Conectar online e offline</h2>
								<p>A conexão entre os mundos online e offline é o primeiro de nossos princípios.</p>
								<p>Nosso foco de negócios são empresas digitais que estejam conectadas com o espaço concreto. Queremos criar experiências imersivas na internet e as estender para fora desse ambiente, ampliando a interação em comunidades. Nosso propósito é promover uma integração entre o online e o offline capaz de gerar qualidade de vida para as pessoas.</p>
								<p>O ICB trabalha para oferecer produtos e serviços interativos, produzir conteúdos compartilháveis e narrativas inspiradoras.</p>
							</section>
							<section class="mapa-right dois">
								<h2 class="titulo titulo3">Somar saberes e experiências</h2>
								<p>Valorizar a ligação dos saberes e a união de habilidades e experiências diferentes em prol de projetos é nosso segundo princípio.</p>
								<p>Apostamos na conexão entre os conhecimentos e reconhecemos a força da experiência como uma fonte rica e indispensável na criação da inovação.</p>
								<p>Somos multidisciplinares, acreditamos que saberes e fazeres são complementares. Somados, eles oferecem possibilidades de as pessoas criarem relações em rede, reforçarem seus laços de ligação e produzirem novas histórias de vida.</p>
							</section>
							<section class="mapa-right tres">
								<h2 class="titulo titulo3">Compartilhar conhecimento para multiplicar possibilidades</h2>
								<p>O mundo é socialmente construído. Para nós, compartilhar conhecimento é fundamental para multiplicar as possibilidades de cada indivíduo na sociedade.</p>
								<p>Usamos como método o envolvimento coletivo para o desenvolvimento de propostas transformadoras. Por isso apostamos na inteligência colaborativa. “Nenhum de nós é melhor do que todos nós juntos”.</p>
								<p>Este é o nosso terceiro princípio.</p>
							</section>
							<section class="mapa-right quatro">
								<h2 class="titulo titulo3">Simplificar a vida</h2>
								<p>Nosso quarto princípio privilegia a simplicidade em todos os momentos da vida, sem ser simplista. Temos uma visão pragmática e queremos buscar sempre o modo mais fácil, imediato, direto, sem complicações, para que cada indivíduo possa ganhar tempo para se dedicar a atividades que lhe sejam mais agradáveis ou interessantes, seja no online ou no offline.</p>
								<p>Estamos alinhados com os recursos tecnológicos mais sofisticados para que eles funcionem como pontes que façam a conexão entre o complexo e o simples.</p>
							</section>
							<section class="mapa-right cinco">
								<h2 class="titulo titulo3">Inovar</h2>
								<p>Trabalhamos pela inovação com qualidade, que é fruto da aplicação de todos os nossos princípios.</p>
								<p>Existem dois tipos de inovação – aquela que é uma ruptura total, e que apresenta uma tecnologia pioneira, que quebra uma barreira do conhecimento; e a segunda forma, em que a novidade está mais vinculada com misturar os dados já existentes para chegar a um resultado diferente.</p>
								<p>É este segundo modelo que o ICB persegue como um de seus valores. Esta capacidade de rearrumar, executar por um outro processo. Tem a ver com ousar, arriscar, com base no conhecimento consolidado.</p>
								<p>Apostamos nas possibilidades infinitas de revolucionarmos os modos de fazer e usar produtos e serviços.</p> 
								<p>A inovação move o homem, através do desafio, da resposta à próxima questão. E não nos cansamos de perguntar. Por que não?</p>
							</section>
							<small>clique para visualizar os tópicos</small>
						</section>

						<section class="area-mapa mobile clearfix">
							<section class="mapa">
								<h3 class="titulo titulo3">Mapa</h3>
								<p>Neste processo de crescimento e de construção de relacionamentos, precisamos de um mapa, que nos oriente para onde vamos, que guie nossa trajetória e garanta que nossas estratégias tenham um sentido. Este mapa são os nossos princípios, resumidos em cinco valores:</p>

								<dl>
									<dt class="clearfix">
										<span class="item um">1</span> <span class="frase">Conectar online e offline</span>
									</dt>
									<dd class="texto">
										<p>A conexão entre os mundos online e offline é o primeiro de nossos princípios.</p>
										<p>Nosso foco de negócios são empresas digitais que estejam conectadas com o espaço concreto. Queremos criar experiências imersivas na internet e as estender para fora desse ambiente, ampliando a interação em comunidades. Nosso propósito é promover uma integração entre o online e o offline capaz de gerar qualidade de vida para as pessoas.</p>
										<p>O ICB trabalha para oferecer produtos e serviços interativos, produzir conteúdos compartilháveis e narrativas inspiradoras.</p>
									</dd>

									<dt class="clearfix">
										<span class="item dois">2</span> <span class="frase">Somar saberes e experiências</span>
									</dt>
									<dd class="texto">
										<p>Valorizar a ligação dos saberes e a união de habilidades e experiências diferentes em prol de projetos é nosso segundo princípio.</p>
										<p>Apostamos na conexão entre os conhecimentos e reconhecemos a força da experiência como uma fonte rica e indispensável na criação da inovação.</p>
										<p>Somos multidisciplinares, acreditamos que saberes e fazeres são complementares. Somados, eles oferecem possibilidades de as pessoas criarem relações em rede, reforçarem seus laços de ligação e produzirem novas histórias de vida.</p>
									</dd>

									<dt class="clearfix">
										<span class="item tres">3</span> <span class="frase item3">Compartilhar conhecimento para multiplicar possibilidade</span>
									</dt>
									<dd class="texto">
										<p>O mundo é socialmente construído. Para nós, compartilhar conhecimento é fundamental para multiplicar as possibilidades de cada indivíduo na sociedade.</p>
										<p>Usamos como método o envolvimento coletivo para o desenvolvimento de propostas transformadoras. Por isso apostamos na inteligência colaborativa. “Nenhum de nós é melhor do que todos nós juntos”.</p>
										<p>Este é o nosso terceiro princípio.</p>
									</dd>

									<dt class="clearfix">
										<span class="item quatro">4</span> <span class="frase">Simplificar a vida</span>
									</dt>
									<dd class="texto">
										<p>Nosso quarto princípio privilegia a simplicidade em todos os momentos da vida, sem ser simplista. Temos uma visão pragmática e queremos buscar sempre o modo mais fácil, imediato, direto, sem complicações, para que cada indivíduo possa ganhar tempo para se dedicar a atividades que lhe sejam mais agradáveis ou interessantes, seja no online ou no offline.</p>
										<p>Estamos alinhados com os recursos tecnológicos mais sofisticados para que eles funcionem como pontes que façam a conexão entre o complexo e o simples.</p>
									</dd>

									<dt class="clearfix">
										<span class="item cinco">5</span> <span class="frase">Inovar</span>
									</dt>
									<dd class="texto">
										<p>Trabalhamos pela inovação com qualidade, que é fruto da aplicação de todos os nossos princípios.</p>
										<p>Existem dois tipos de inovação – aquela que é uma ruptura total, e que apresenta uma tecnologia pioneira, que quebra uma barreira do conhecimento; e a segunda forma, em que a novidade está mais vinculada com misturar os dados já existentes para chegar a um resultado diferente.</p>
										<p>É este segundo modelo que o ICB persegue como um de seus valores. Esta capacidade de rearrumar, executar por um outro processo. Tem a ver com ousar, arriscar, com base no conhecimento consolidado.</p>
										<p>Apostamos nas possibilidades infinitas de revolucionarmos os modos de fazer e usar produtos e serviços.</p> 
										<p>A inovação move o homem, através do desafio, da resposta à próxima questão. E não nos cansamos de perguntar. Por que não?</p>
									</dd>
								</dl>
							</section>
						</section>

						<h2 class="titulo titulo5">Isso é o ICB!</h2>
						<h2 class="titulo titulo6">O propósito de multiplicar nos conecta</h2>
						<p class="obs">Se em uma estrada duas pessoas, cada uma carregando um pão, se encontram e trocam pães, cada uma delas segue com um pão. Se cada pessoa vem com uma ideia, ao se encontrarem e trocarem ideias, cada uma delas sai com duas ideias!</p>
					</div>
				</section>
				<!-- /PORTUGUES -->

				<!-- INGLES -->
				<section id="bios" class="area bios toggle en">
					<h2 class="titulo titulo7 mobile">Bios</h2>
					<a href="javascript:;" class="bandeira brasil">Português-Brasil</a>
					<div class="container center">
						<h2 class="titulo titulo1">
							<span class="frase1">It's not about ideas</span> <span class="frase2">it's about making ideas happen</span>
						</h2>

						<div class="col1 left">
							<dl class="box valores">
								<dt class="titulo titulo3">What moves us?</dt>
								<dd>Multiplying experiences, possibilities and opportunities.</dd>

								<dt class="titulo titulo3">How we do it?</dt>
								<dd>Through digital and innovative companies that connect online to offline.</dd>

								<dt class="titulo titulo3">What do we do?</dt>
								<dd>We are a corporation that searches and applies new modes of management. We promote collaborative and qualitative network connections of different expertise to share knowledge, stimulate continuous learning and develop companies through a creative economy perspective.</dd>
							</dl>

							<section class="box principio">
								<h2 class="titulo titulo4">Principle (prin-ci-ple), noun</h2>
								<ul>
									<li>A fundamental assumption.</li>
									<li>A rule used to choose among solutions to a problem.</li>
									<li>(Usually plural) Moral rule or aspect.</li>
									<li>(Physics) A rule or law of nature, or the basic idea on how the laws of nature are applied.</li>
									<li>A fundamental essence, particularly one producing a given quality.</li>
									<li>(Obsolete) A beginning.</li>
								</ul>
								<p>Wiktionary<br>wiki-based Open Content Dictionary</p>
							</section>

							<section class="box frases-ing"></section>

							<section class="significado">
								<h2 class="titulo titulo3">ICB.LA</h2>
								<p>The name ICB is emblematic. Is "ICB" an acronym? Is it the partners' initials? Is it an abbreviation? We don't have a single meanin.bios .frasesg. In fact, "ICB" is an open concept to be filled by each one's imagination. We wanted a short, easy to memorize, Internet address.</p>

								<p>As well as "ICB", the dot LA (.LA) can gain various interpretations. The acronym can refer to Latin America, Los Angeles, Lampung, Louisiana, Local Agent, Law Agent, Legislative Assembly, Library Association, Lao People's Democratic Republic, the sixth tone of the diatonic scale, an exclamation of surprise or emphasis, etc. Many of these are interesting while considering our company, especially the sense of surprise that ".LA" conveys. We want to create a "LA" company, surprisingly creative and different.</p>
							</section>
						</div>

						<div class="col2 right">
							<div class="box ilustracao arvore"></div>

							<dl class="box right">
								<dt class="titulo titulo3">Why Not?</dt>
								<dd>ICB arose from a question. Why not? Why isn't it possible to combine work and pleasure, professional achievement with personal fulfillment? Why does every business relationship have to be advantageous for only one side? Why not establish working relations based on partnerships and common interests? Why must a business deal have to be focused only on lower costs and increased speed to maximize profits? Why compete and not… collaborate?</dd>

								<dt class="titulo titulo3">Partners</dt>
								<dd>With different backgrounds, professional experiences and courses, but with a common idea: to do it differently. More than thinking of a new company, the challenge was to create this new company.</dd>

								<dt class="titulo titulo3">Model</dt>
								<dd>We do not believe in pre-formatted models. We believe in collaborative intelligence. Therefore, we work in networks based on trust relationships. ICB's multidisciplinary intellectual capital brings together individuals in favour of the collective in a dynamic environment, promoting innovation through the reorganization of information.</dd>
							</dl>

							<div class="ilustracao icb-big"></div>
						</div>

						<h2 class="titulo titulo2 box">We join the online possibilities to offline</h2>

						<div class="col1 left">
							<div class="ilustracao religious box"></div>

							<section class="box planejamento">
								<h3 class="titulo titulo3">I think, therefore I can change my opinion</h3>
								<p>We are in constant motion. We correct routes, points of view
								and opinions. The process of recognizing what needs to be improved, changed, revised is fundamental, because it helps
								us to enhance our users' experience.</p>

								<p>We believe in planning. However, we believe that planning must be aligned to execution, and have the flexibility and agility to identify changes, adapt to them, and propose new solutions. We work with a range of contemporary methodologies, seeking an interactive and incremental development process for managing complex projects, in which it is impossible to predict all the outcomes. Short sprints, with periodic revisions.</p>

								<p>This means that we are constantly involved in all the projects, in different degrees, at different times. The partners’ and associates' commitment is total.</p>
							</section>
						</div>

						<div class="col2 right">
							<section class="icb-p2p">
								<h2 class="titulo titulo3">A p2p Company (peer-to-peer)</h2>
								<p>To grow with responsibility and sustainability would be the minimum requirements for a company to evolve. For the ICB, a "la" company, this growth must also be organic and coupled to connections with synergistic interests and values, aligned with the culture of quality.</p>

								<p>We are a P2P company; we operate in network. For us, each user has an important role and contributes with diverse resources in equal conditions, respecting individual characteristics.</p>

								<p>ICB cultivates individual differences, specific competences and the contribution that each party can offer towards a common goal: to multiply. We monetize the consequences of a job well done, and most of all, done with pleasure.</p>
							</section>

							<div class="ilustracao cubo"></div>
						</div>

						<section class="area-mapa tablet-monitor clearfix">
							<section class="mapa left">
								<h3 class="titulo titulo3">Map</h3>
								<p>In this growth and relationship building process, we need a map to direct us to our destinations, to guide our courses and to ensure that our strategies are meaningful. This map is composed by our principles, summarized in five values:</p>
								<ul>
									<li>
										<a href="javascript:;" class="clearfix"><span id="divum" class="item um">1</span> <span class="frase">Connecting online and offline</span></a>
									</li>
									<li>
										<a href="javascript:;" class="clearfix"><span id="divdois" class="item dois">2</span> <span class="frase">Aggregating expertises &amp; experiences</span></a>
									</li>
									<li>
										<a href="javascript:;" class="clearfix"><span id="divtres" class="item tres">3</span> <span class="frase">Sharing knowledge to multiply possibilities</span></a>
									</li>
									<li>
										<a href="javascript:;" class="clearfix"><span id="divquatro" class="item quatro">4</span> <span class="frase">Simplifying life</span></a>
									</li>
									<li>
										<a href="javascript:;" class="clearfix"><span id="divcinco" class="item cinco">5</span> <span class="frase">Innovating</span></a>
									</li>
								</ul>
							</section>
							<section class="mapa-right um">
								<h2 class="titulo titulo3">Connecting online and offline</h2>
								<p>The connection between the online and offline worlds is our number one principle.</p>
								<p>Our business focus is digital companies that are connected to a concrete location. We want to create immersive experiences on the Internet and extend them outwards from this environment, amplifying the interaction in communities. Our purpose is to promote an integration between online and offline which is capable of generating better life quality to people.</p>
								<p>ICB works to offer interactive products and services, to produce sharable contents and inspirational narratives.</p>
							</section>
							<section class="mapa-right dois">
								<h2 class="titulo titulo3">Aggregating expertises &amp; experiences</h2>
								<p>Enhancing the connection of expertises and the aggregation of different experiences and skills in support of projects is our second principle.</p>
								<p>We bet on the connection between knowledges and we recognize the strength of experience as a rich and indispensable source for creation of innovation.</p>
								<p>We are multidisciplinary; we believe that knowledges and practices are complementary. Together, they offer opportunities for people to build network relationships, strengthen their ties and produce new life stories.</p>
							</section>
							<section class="mapa-right tres">
								<h2 class="titulo titulo3">Sharing knowledge to multiply possibilities</h2>
								<p>The world is socially constructed. For us, sharing knowledge is fundamental to multiply each individual’s possibilities in society.</p>
								<p>We use collective involvement as a method for the development transformative proposals. This is why we bet on collaborative intelligence. "None of us is better than all of us together".</p>
								<p>This is our third principle.</p>
							</section>
							<section class="mapa-right quatro">
								<h2 class="titulo titulo3">Simplifying life</h2>
								<p>Our fourth principle emphasizes simplicity in all of life's moments, without being simplistic. We have a pragmatic view and wish to always seek the easiest, most immediate and direct way, without complications, so that each individual can gain time to devote to activities that are more pleasant or interesting, whether online or offline.</p>
								<p>We are aligned with the most sophisticated technological resources so that they work as bridges connecting the complex and the simple.</p>
							</section>
							<section class="mapa-right cinco">
								<h2 class="titulo titulo3">Innovating</h2>
								<p>We work for innovation with quality, which is the result of the application of all our principles.</p>
								<p>There are two types of innovation - one that is a complete breakdown, and presents a pioneering technology, which breaks a knowledge barrier; and a second one, in which the new is more connected with mixing already existing data to reach a different result.</p>
								<p>It is this second model that ICB pursues as one of its values - this ability to rearrange, to accomplish through another process. It is related to daring and risking, based on the consolidated knowledge.</p>
								<p>We believe in the endless possibilities of revolutionizing the ways products and services are made and used.</p> 
								<p>Innovation moves man, through challenge of the answer to the next question.</p>
								<p>And we are not tired of asking. Why not?</p>
							</section>
			
							<small>click to view</small>
						</section>

						<section class="area-mapa mobile clearfix">
							<section class="mapa">
								<h3 class="titulo titulo3">Map</h3>
								<p>In this growth and relationship building process, we need a map to direct us to our destinations, to guide our courses and to ensure that our strategies are meaningful. This map is composed by our principles, summarized in five values:</p>

								<dl>
									<dt class="clearfix">
										<span class="item um">1</span> <span class="frase">Connecting online and offline</span>
									</dt>
									<dd class="texto">
										<p>The connection between the online and offline worlds is our number one principle.</p>
										<p>Our business focus is digital companies that are connected to a concrete location. We want to create immersive experiences on the Internet and extend them outwards from this environment, amplifying the interaction in communities. Our purpose is to promote an integration between online and offline which is capable of generating better life quality to people.</p>
										<p>ICB works to offer interactive products and services, to produce sharable contents and inspirational narratives.</p>
									</dd>

									<dt class="clearfix">
										<span class="item dois">2</span> <span class="frase">Aggregating expertises &amp; experiences</span>
									</dt>
									<dd class="texto">
										<p>Enhancing the connection of expertises and the aggregation of different experiences and skills in support of projects is our second principle.</p>
										<p>We bet on the connection between knowledges and we recognize the strength of experience as a rich and indispensable source for creation of innovation.</p>
										<p>We are multidisciplinary; we believe that knowledges and practices are complementary. Together, they offer opportunities for people to build network relationships, strengthen their ties and produce new life stories.</p>
									</dd>

									<dt class="clearfix">
										<span class="item tres">3</span> <span class="frase">Sharing knowledge to multiply possibilities</span>
									</dt>
									<dd class="texto">
										<p>The world is socially constructed. For us, sharing knowledge is fundamental to multiply each individual’s possibilities in society.</p>
										<p>We use collective involvement as a method for the development transformative proposals. This is why we bet on collaborative intelligence. "None of us is better than all of us together".</p>
										<p>This is our third principle.</p>
									</dd>

									<dt class="clearfix">
										<span class="item quatro">4</span> <span class="frase">Simplifying life</span>
									</dt>
									<dd class="texto">
										<p>Our fourth principle emphasizes simplicity in all of life's moments, without being simplistic. We have a pragmatic view and wish to always seek the easiest, most immediate and direct way, without complications, so that each individual can gain time to devote to activities that are more pleasant or interesting, whether online or offline.</p>
										<p>We are aligned with the most sophisticated technological resources so that they work as bridges connecting the complex and the simple.</p>
									</dd>

									<dt class="clearfix">
										<span class="item cinco">5</span> <span class="frase">Innovating</span>
									</dt>
									<dd class="texto">
										<p>We work for innovation with quality, which is the result of the application of all our principles.</p>
										<p>There are two types of innovation - one that is a complete breakdown, and presents a pioneering technology, which breaks a knowledge barrier; and a second one, in which the new is more connected with mixing already existing data to reach a different result.</p>
										<p>It is this second model that ICB pursues as one of its values - this ability to rearrange, to accomplish through another process. It is related to daring and risking, based on the consolidated knowledge.</p>
										<p>We believe in the endless possibilities of revolutionizing the ways products and services are made and used.</p> 
										<p>Innovation moves man, through challenge of the answer to the next question.</p>
										<p>And we are not tired of asking. Why not?</p>
									</dd>
		
								</dl>
							</section>
						</section>

						<h2 class="titulo titulo5">This is ICB!</h2>
						<h2 class="titulo titulo6">The purpose of multiplying connects us</h2>
						<p class="obs">If two people meet on a road, each of them carrying one loaf of bread and they exchange breads,<br>each one will continue with one loaf. If each person comes with an idea, when they meet and exchange ideas,<br>each one comes out with two ideas!</p>
					</div>
				</section>
				<!-- /INGLES -->
			<!-- /BIOS -->

			<!-- P2P -->
			<section id="p2p" class="area p2p toggle">
				<h2 class="titulo titulo7 mobile">P2P</h2>
				<div class="container center">
					<ul class="equipe">
						<li class="impar">
							<a href="http://br.linkedin.com/pub/gisela-falkenbach/10/313/579" target="_blank" class="g gf">
								<span class="titulo titulo3"><span class="nome">Gisela</span> Falkenbach</span>
								<span class="img"></span>
							</a>
						</li>
						<li class="par">
							<a href="http://br.linkedin.com/pub/alessandro-oliveira/25/a80/943" target="_blank" class="g ao">
								<span class="titulo titulo3"><span class="nome">Alessandro</span> Oliveira</span>
								<span class="img"></span>
							</a>
						</li>
						<li class="impar">
							<a href="http://br.linkedin.com/pub/claudio-pereira/5/365/357" target="_blank" class="g cp">
								<span class="titulo titulo3"><span class="nome">Claudio</span> Pereira</span>
								<span class="img"></span>
							</a>
						</li>
						<li class="par">
							<a href="http://www.linkedin.com/pub/joão-daniel-edde/3a/80/5a3" target="_blank" class="g jd">
								<span class="titulo titulo3"><span class="nome">João</span> Edde</span>
								<span class="img"></span>
							</a>
						</li>
						<li class="impar">
							<a href="http://www.linkedin.com/pub/antonio-pedro-f-de-abreu-e-silva/3a/7b/a55" target="_blank" class="g ap">
								<span class="titulo titulo3"><span class="nome">Antonio</span> Pedro</span>
								<span class="img"></span>
							</a>
						</li>
						<li class="par">
							<a href="http://br.linkedin.com/pub/raimundo-oliveira/33/949/5b1" target="_blank" class="m ro">
								<span class="titulo titulo3"><span class="nome">Raimundo</span> Oliveira</span>
								<span class="img"></span>
							</a>
						</li>
						<li class="impar">
							<a href="http://br.linkedin.com/pub/oliveira-edoardo/a/1b8/25a" target="_blank" class="m eo">
								<span class="titulo titulo3"><span class="nome">Edoardo</span> Oliveira</span>
								<span class="img"></span>
							</a>
						</li>
						<li class="par">
							<a href="http://www.facebook.com/daniel.dantas.351" target="_blank" class="m dd">
								<span class="titulo titulo3"><span class="nome">Daniel</span> Dantas</span>
								<span class="img"></span>
							</a>
						</li>
						<li class="impar">
							<a href="http://br.linkedin.com/pub/mariel-pontes-oliveira/32/51a/3b0" target="_blank" class="m mo">
								<span class="titulo titulo3"><span class="nome">Mariel</span> Oliveira</span>
								<span class="img"></span>
							</a>
						</li>

						<div class="m p2p-vazio vazio1"></div>
					
						<div class="m p2p-vazio vazio2"></div>

						<li class="par">
							<a href="http://br.linkedin.com/pub/bruno-moura-brasil/51/943/87" target="_blank" class="p bm">
								<span class="titulo titulo3"><span class="nome">Bruno</span> Moura</span>
								<span class="img"></span>
							</a>
						</li>
						<li class="impar">
							<a href="http://br.linkedin.com/pub/bruno-siffert/9/a8b/7b9" target="_blank" class="p bs">
								<span class="titulo titulo3"><span class="nome">Bruno</span> Siffert</span>
								<span class="img"></span>
							</a>
						</li>

						<div class="p p2p-vazio vazio3"></div>

						<li class="par">
							<a href="http://br.linkedin.com/pub/eduardo-costa/33/933/325" target="_blank" class="p ec">
								<span class="titulo titulo3"><span class="nome">Eduardo</span> Costa</span>
								<span class="img"></span>
							</a>
						</li>

						<div class="p p2p-vazio vazio4"></div>

						<div class="p p2p-vazio vazio5"></div>

						<li class="impar">
							<a href="http://www.twitter.com/r_will" target="_blank" class="p wr">
								<span class="titulo titulo3"><span class="nome">Will</span> Robson</span>
								<span class="img"></span>
							</a>
						</li>
						<li class="par">
							<a target="_blank" class="p sv">
								<span class="titulo titulo3"><span class="nome">Sergio</span> Vianna</span>
								<span class="img"></span>
							</a>
						</li>
					</div>
					</ul>
				</div>
			</section>
			<!-- /P2P -->

			<!-- NETWORK -->
			<section id="network" class="area network toggle">
				<h2 class="titulo titulo7 mobile">Network</h2>
				<div class="container center">
					<section class="logos">
						<ul>
							<li class="olsix"><a href="http://olsix.com/" target="_blank">Olsix</a></li>
							<li class="sizes"><span>Size</span></li>
							<li class="icbzin"><span>ICBZin</span></li>
						</ul>
					</section>
				</div>
			</section>
			<!-- /NETWORK -->

			<!-- IDEA -->
			<section id="idea" class="area idea toggle">
				<h2 class="titulo titulo7 mobile">Idea</h2>
				<div class="container center">
					<ul class="empresas clearfix">
						<li><a class="barganhou" href="http://www.barganhou.la/" target="_blank">Barganhou.la</a></li>
						<li><a class="catalogo" href="http://catalogo.la/" target="_blank">Catalogo.la</a></li>
						<li><a class="conecta" href="http://www.conecta.la/" target="_blank">Conecta.la</a></li>
						<li><a class="youjudge" href="http://youjudge.la" target="_blank">YouJudge.la</a></li>
						<li><a class="oshopping" href="http://www.oshopping.la/" target="_blank">Oshopping.la</a></li>
						<li><a class="nanobusiness" href="http://www.nanobusiness.com.br/nanobusiness/parceiros/" target="_blank">Nano Business</a></li>
						<li><a class="addict" href="https://vimeo.com/35271980" target="_blank">Addict</a></li>
						<li><a class="baculeju" href="https://vimeo.com/36917860" target="_blank">Baculeju da Sá</a></li>
						<li><a class="autograph" href="http://autograph.la/" target="_blank">Autograph.la</a></li>
					</ul>
				</div>
			</section>
			<!-- /IDEA -->

			<!-- LA -->
			<section id="la" class="area la toggle">
				<h2 class="titulo titulo7 mobile">Entre em Contato</h2>
				<div class="container center clearfix">
					<section class="endereco left clearfix">
						<div class="lagoa-corp tablet-monitor left">Lagoa Corporate</div>
						<div class="info left clearfix">
							<i class="icone i-localizacao mobile"></i>
							<address>
								Edifício Lagoa Corporate<br />
								Rua Humaitá 275 • 7o andar<br />
								Rio de Janeiro • 22261-001<br />
								RJ • Brasil
							</address>
						</div>
					</section>
				
					<section class="contato right">
						<h2 class="tablet-monitor titulo titulo3">Entre em Contato</h2>
						<div id="destino"></div>
						<form name="f" id="f" method="post">
							<!--[if lt IE 10]><label for="nome">Nome:</label><![endif]-->
							<input type="text" id="nome" name="nome" placeholder="nome" value="" class="campo required">
							<!--[if lt IE 10]><label for="email">Email:</label><![endif]-->
							<input type="text" id="email" name="email" placeholder="email" value="" class="campo required">
							<!--[if lt IE 10]><label for="telefone">Telefone:</label><![endif]-->
							<input type="text" id="telefone" name="telefone" placeholder="telefone" value="" class="campo">
							<!--[if lt IE 10]><label for="mensagem">Mensagem:</label><![endif]-->
							<textarea rows="9" id="mensagem" name="mensagem" placeholder="mensagem" class="campo required"></textarea>
							<button id="btn1" type="submit">Enviar</button>
						</form>
					</section>
				</div>
			</section>
			<!-- /LA -->
		</section>
			<footer class="center clearfix">
				<p class="left">ICB.la • 2014 Todos os Direitos Reservados</p>
				<ul class="right clearfix">
					<li><a class="rede-social linkedin" href="http://www.linkedin.com/company/2320013" target="_blank">linkedin</a></li>
					<li><a class="rede-social vimeo" href="https://vimeo.com/icbla" target="_blank">vimeo</a></li>
				</ul>
			</footer>
		</div>
		<!-- /WRAPPER -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/additional-scripts.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/jquery.slicknav.js"></script>
		<script>
			$('#menuMobile').slicknav();
			$(".slicknav_menu").hide();
		</script>
	</body>
</html>