<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHT Games</title>
<style>
:root{--bg:#1b2838;--bg2:#171a21;--panel:#16202d;--blue:#66c0f4;--green:#5c7e10;--green2:#a4d007;--text:#c7d5e0;--muted:#8f98a0}
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:"Motiva Sans",Arial,Helvetica,sans-serif;background:linear-gradient(#1b2838,#0e141b 600px) fixed;color:var(--text)}
header{background:var(--bg2);box-shadow:0 2px 8px #000a;position:sticky;top:0;z-index:5}
.nav{max-width:1000px;margin:auto;display:flex;align-items:center;gap:24px;padding:14px 16px;flex-wrap:wrap}
.logo{font-size:1.5rem;font-weight:800;letter-spacing:2px;color:#fff}
.logo span{color:var(--blue)}
.nav a{color:var(--text);text-decoration:none;font-size:.85rem;text-transform:uppercase;letter-spacing:1px}
.nav a:hover{color:#fff}
main{max-width:1000px;margin:auto;padding:24px 16px 48px}
.hero{border-radius:4px;padding:48px 32px;background:linear-gradient(120deg,#1a0670,#0b3a6b 60%,#051730);box-shadow:0 0 20px #000a;margin-bottom:28px}
.hero h1{color:#fff;font-size:2rem;margin-bottom:8px}
.hero p{color:var(--blue);max-width:520px}
h2{color:#fff;font-weight:400;font-size:1.1rem;text-transform:uppercase;letter-spacing:1px;margin:28px 0 12px;border-left:4px solid var(--blue);padding-left:10px}
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:18px}
.card{background:var(--panel);border-radius:4px;overflow:hidden;cursor:pointer;border:2px solid transparent;transition:.2s}
.card:hover{transform:translateY(-4px);border-color:var(--blue)}
.card.sel{border-color:var(--green2)}
.cover{height:240px;display:flex;align-items:center;justify-content:center;font-size:3.5rem;overflow:hidden}
.cover img{width:100%;height:100%;object-fit:cover;object-position:center;display:block}
.info{padding:12px}
.info b{display:block;color:#fff;font-size:1rem}
.info small{color:var(--muted)}
.price{margin-top:10px;display:flex;justify-content:space-between;align-items:center}
.disc{background:var(--green);color:var(--green2);font-weight:700;padding:2px 6px;font-size:.8rem}
.val{background:#000a;color:var(--text);padding:2px 8px;font-size:.9rem}
.box{background:var(--panel);border-radius:4px;padding:24px;box-shadow:0 0 12px #0008}
.row{display:grid;grid-template-columns:1fr 1fr;gap:16px}
@media(max-width:640px){.row{grid-template-columns:1fr}}
label{display:block;font-size:.8rem;color:var(--muted);text-transform:uppercase;margin:12px 0 4px}
input,select{width:100%;padding:10px;background:#0e141b;border:1px solid #2a475e;border-radius:3px;color:#fff;font-size:1rem}
input:focus,select:focus{outline:none;border-color:var(--blue)}
h3{color:#fff;margin-top:22px;font-weight:400}
button{margin-top:24px;width:100%;padding:14px;border:0;border-radius:3px;font-size:1.05rem;font-weight:700;color:#d2efa9;cursor:pointer;background:linear-gradient(to right,#75b022,#588a1b)}
button:hover{background:linear-gradient(to right,#8ed629,#6aa621);color:#fff}
.badges{display:flex;gap:12px;flex-wrap:wrap;margin-top:20px;color:var(--muted);font-size:.85rem}
footer{background:var(--bg2);color:var(--muted);text-align:center;padding:20px;font-size:.8rem}
</style>
</head>
<body>
<header>
    <div class="nav">
        <div class="logo">PHT<span>GAMES</span></div>
        <a href="#loja">Loja</a><a href="#cliente">Comprar</a><a href="#">Comunidade</a><a href="#">Suporte</a>
    </div>
</header>

<main>
    <section class="hero">
        <h1>Mega Promoção de Jogos</h1>
        <p>Os melhores jogos de RPG, FPS, Mundo Aberto, Ação e Indie com até 75% de desconto. Escolha o seu e finalize a compra abaixo.</p>
    </section>

    <h2 id="loja">Destaques da loja</h2>
    <div class="grid">

        <div class="card" data-tipo="Mundo Aberto" data-preco="449,90">
            <div class="cover" style="background:linear-gradient(135deg,#6b2d8f,#2a1050)">
                <img src="https://blog.br.playstation.com/tachyon/sites/4/2026/06/f7b2a5699a4ab4c617be85ca2dc6291abc1159f5.jpg" alt="GTA VI">
            </div>
            <div class="info"><b>Gta VI</b><small>Mundo Aberto</small>
            <div class="price"><span class="disc">-50%</span><span class="val">R$ 519,90</span></div></div>
        </div>

        <div class="card" data-tipo="FPS" data-preco="119.90">
            <div class="cover" style="background:linear-gradient(135deg,#a33,#401010)">
                <img src="https://image.api.playstation.com/vulcan/img/rnd/202106/0722/4MxzDZKZwtEWyMWZghvwd7bQ.jpg" alt="Far Cry 6">
                <!-- Para usar imagem: <img src="LINK-DA-IMAGEM" alt="Far Cry 6"> no lugar do emoji -->
                
            </div>
            <div class="info"><b>Far Cry 6</b><small>FPS</small>
            <div class="price"><span class="disc">-25%</span><span class="val">R$ 119,90</span></div></div>
        </div>

        <div class="card" data-tipo="Luta" dpreco="149.90">
            <div class="cover" style="background:linear-gradient(135deg,#2a6f97,#0b2a40)">
                <img src="https://cdn-ext.fanatical.com/production/product/1280x720/68310a3e-4b93-45dc-b195-643a7ff53d51.jpeg" alt="Far Cry 6">
                
            </div>
            <div class="info"><b>Mortal Kombat</b><small>Luta</small>
            <div class="price"><span class="disc">-40%</span><span class="val">R$ 169,90</span></div></div>
            
        </div>

        <div class="card" data-tipo="Ação" data-preco="399.90">
            <div class="cover" style="background:linear-gradient(135deg,#2d8f5a,#0d3a24)">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLDytzaBIhqM8OsPFwi6fxKjPgoRGYEhxxF2yADgk2JQ&s" alt="God of War Ragnarok">
                
            </div>
            <div class="info"><b>God of War Ragnarok</b><small>Ação</small>
            <div class="price"><span class="disc">-30%</span><span class="val">R$ 399,90</span></div></div>
        </div>

        <div class="card" data-tipo="Mundo Aberto" data-preco="74.90">
            <div class="cover" style="background:linear-gradient(135deg,#c78a1c,#4a2f06)">
                <img src="https://image.api.playstation.com/gs2-sec/appkgo/prod/CUSA08519_00/12/i_3da1cf7c41dc7652f9b639e1680d96436773658668c7dc3930c441291095713b/i/icon0.png" alt="Red Dead Redemption 2">
                
            </div>
            <div class="info"><b>Red Dead Redemption 2</b><small>Mundo Aberto</small>
            <div class="price"><span class="disc">-75%</span><span class="val">R$ 74.90</span></div></div>
        </div>

    </div>

    <h2 id="cliente">Finalizar compra</h2>
    <form class="box" action="logica.php" method="POST">
        <h3 style="margin-top:0">Dados do cliente</h3>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>
        <div class="row">
            <div>
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="CPF" inputmode="numeric" maxlength="14" placeholder="000.000.000-00" required>
            </div>
            <div>
                <label for="tel">Telefone</label>
                <input type="text" id="tel" name="telefone" inputmode="tel" maxlength="15" placeholder="(00) 00000-0000">
            </div>
        </div>

        <h3>Tipo de jogo</h3>
        <select name="tipo_do_jogo" id="tipo" required>
            <option value="">Escolha um tipo de jogo</option>
            <option value="RPG">RPG</option>
            <option value="FPS">FPS</option>
            <option value="Modo Historia">Modo Historia</option>
            <option value="Mundo Aberto">Mundo Aberto</option>
            <option value="Luta">Luta</option>
            <option value="Ação">Ação</option>
            <option value="Indie">Indie</option>
        </select>

        <h3>Área de pagamento</h3>
        <div class="row">
            <div>
                <label for="preco">Preço do jogo (R$)</label>
                <input type="text" id="preco" name="preco_jogo" placeholder="0,00">
            </div>
            <div>
                <label for="pag">Forma de pagamento</label>
                <select name="tipo_de_pagamento" id="pag" required>
                    <option value="">Escolha um tipo de Pagamento</option>
                    <option value="Dinheiro">Dinheiro</option>
                    <option value="PIX">PIX</option>
                    <option value="Cartão de credito">Cartão de credito</option>
                    <option value="Cartão de debito">Cartão de debito</option>
                </select>
            </div>
        </div>

        <div class="badges"><span>🔒 Compra segura</span><span>⚡ Entrega imediata</span><span>🎮 Chave de ativação por e-mail</span></div>
        <button type="submit">Finalizar Compra</button>
    </form>
</main>

<footer>© PHT Games — Todos os direitos reservados.</footer>

<script>
const cards=document.querySelectorAll('.card'),tipo=document.getElementById('tipo'),preco=document.getElementById('preco');
cards.forEach(c=>c.addEventListener('click',()=>{
    cards.forEach(x=>x.classList.remove('sel'));c.classList.add('sel');
    tipo.value=c.dataset.tipo;preco.value=c.dataset.preco;
    document.getElementById('cliente').scrollIntoView({behavior:'smooth'});
}));
document.getElementById('cpf').addEventListener('input',e=>{
    let v=e.target.value.replace(/\D/g,'').slice(0,11);
    v=v.replace(/(\d{3})(\d)/,'$1.$2').replace(/(\d{3})(\d)/,'$1.$2').replace(/(\d{3})(\d{1,2})$/,'$1-$2');
    e.target.value=v;
});
document.getElementById('tel').addEventListener('input',e=>{
    let v=e.target.value.replace(/\D/g,'').slice(0,11);
    v=v.replace(/^(\d{2})(\d)/,'($1) $2').replace(/(\d{5})(\d{1,4})$/,'$1-$2');
    e.target.value=v;
});
</script>
</body>
</html>
