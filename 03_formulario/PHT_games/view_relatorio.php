<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Relatório de Compras</title>
<style>
:root{--bg2:#171a21;--panel:#16202d;--blue:#66c0f4;--green:#5c7e10;--green2:#a4d007;--text:#c7d5e0;--muted:#8f98a0}
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:"Motiva Sans",Arial,Helvetica,sans-serif;background:linear-gradient(#1b2838,#0e141b 600px) fixed;color:var(--text);min-height:100vh}
header{background:var(--bg2);box-shadow:0 2px 8px #000a}
.nav{max-width:760px;margin:auto;padding:14px 16px;display:flex;justify-content:space-between;align-items:center}
.logo{font-size:1.5rem;font-weight:800;letter-spacing:2px;color:#fff}
.logo span{color:var(--blue)}
.nav a{color:var(--text);text-decoration:none;font-size:.85rem;text-transform:uppercase;letter-spacing:1px}
.nav a:hover{color:#fff}
main{max-width:760px;margin:auto;padding:28px 16px 48px}
.title{text-align:center;margin-bottom:24px}
.check{width:60px;height:60px;line-height:60px;margin:0 auto 12px;border-radius:50%;background:var(--green);color:var(--green2);font-size:2rem}
.title h1{color:#fff;font-size:1.8rem}
.title p{color:var(--muted);margin-top:4px}
.card{background:var(--panel);border-radius:4px;box-shadow:0 0 12px #0008;margin-bottom:18px;overflow:hidden}
.card h2{background:linear-gradient(to right,#1a0670,#0b3a6b);color:#fff;font-weight:400;font-size:.95rem;text-transform:uppercase;letter-spacing:1px;padding:12px 18px}
.line{display:flex;justify-content:space-between;gap:16px;padding:12px 18px;border-bottom:1px solid #2a475e}
.line:last-child{border-bottom:0}
.line b{color:var(--muted);font-weight:400;text-transform:uppercase;font-size:.8rem;letter-spacing:.5px}
.line span{color:#fff;text-align:right}
.tag{background:#000a;color:var(--blue);padding:2px 10px;border-radius:2px}
.disc{background:var(--green);color:var(--green2);font-weight:700;padding:2px 8px}
.total{background:#0e141b;font-size:1.3rem}
.total span{color:var(--green2);font-weight:700}
.actions{display:flex;gap:12px;margin-top:22px}
.btn{flex:1;text-align:center;padding:14px;border:0;border-radius:3px;font-size:1rem;font-weight:700;cursor:pointer;text-decoration:none}
.btn.p{color:#d2efa9;background:linear-gradient(to right,#75b022,#588a1b)}
.btn.p:hover{background:linear-gradient(to right,#8ed629,#6aa621);color:#fff}
.btn.s{color:var(--blue);background:#2a475e}
.btn.s:hover{background:#355b78;color:#fff}
@media print{header,.actions{display:none}body{background:#fff}}
</style>
</head>
<body>
<header>
    <div class="nav">
        <div class="logo">PHT<span>GAMES</span></div>
        <a href="index.php">← Voltar à loja</a>
    </div>
</header>

<main>
    <div class="title">
        <div class="check">✓</div>
        <h1>Compra finalizada!</h1>
        <p>Relatório de Compras</p>
    </div>

    <section class="card">
        <h2>Dados do Cliente</h2>
        <div class="line"><b>Nome</b><span><?= htmlspecialchars($nome) ?></span></div>
        <div class="line"><b>Telefone</b><span><?= htmlspecialchars($telefone) ?></span></div>
        <div class="line"><b>CPF</b><span><?= htmlspecialchars($CPF) ?></span></div>
    </section>

    <section class="card">
        <h2>Dados da Compra</h2>
        <div class="line"><b>Tipo do Jogo</b><span class="tag"><?= htmlspecialchars($tipo_do_jogo) ?></span></div>
        <div class="line"><b>Preço do Jogo</b><span>R$ <?= $preco_jogo ?></span></div>
    </section>

    <section class="card">
        <h2>Pagamento</h2>
        <div class="line"><b>Tipo de Pagamento</b><span class="tag"><?= htmlspecialchars($tipo_de_pagamento) ?></span></div>
    </section>

    <section class="card">
        <h2>Resumo da Compra</h2>
        <div class="line"><b>Subtotal</b><span>R$ <?= $preco_jogo ?></span></div>
        <div class="line"><b>Desconto</b><span class="disc">-<?= $desconto ?>%</span></div>
        <div class="line"><b>Valor do Desconto</b><span>- R$ <?= $valorDesconto ?></span></div>
        <div class="line total"><b>Total</b><span>R$ <?= $total ?></span></div>
    </section>

    <div class="actions">
        <a class="btn s" href="view.php">Nova compra</a>
        <button class="btn p" onclick="window.print()">Imprimir relatório</button>
    </div>
</main>
</body>
</html>