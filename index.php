<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Отабеков Улугбек Отабекович | Ulogix Community</title>
  <style>
    :root {
      --bg: #f3f4f6;
      --surface: #ffffff;
      --surface-alt: #f9fafb;
      --charcoal: #1f242b;
      --charcoal-dark: #14181d;
      --gold-solid: #c8962e;
      --gold-metallic: linear-gradient(135deg, #f5d882 0%, #d6a439 48%, #a37116 100%);
      --border: #e5e7eb;
      --text: #1f242b;
      --muted: #525866;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Inter", sans-serif;
    }

    body {
      background-color: var(--bg);
      color: var(--text);
      line-height: 1.6;
      padding-bottom: 84px;
    }

    header {
      background: var(--charcoal-dark);
      color: #ffffff;
      border-bottom: 3px solid var(--gold-solid);
      position: sticky;
      top: 0;
      z-index: 30;
    }

    .header-inner {
      max-width: 1120px;
      margin: 0 auto;
      padding: 12px 20px;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
    }

    /* Эмблема без рамки и золотистая надпись Ulogix Community снизу */
    .emblem-brand {
      display: inline-flex;
      flex-direction: column;
      align-items: center;
      text-decoration: none;
      gap: 5px;
    }

    .emblem-box {
      width: 46px;
      height: 46px;
      border-radius: 8px;
      background: #ffffff;
      border: none;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .emblem-box img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .emblem-title {
      font-size: 11.5px;
      font-weight: 800;
      letter-spacing: 0.5px;
      line-height: 1.15;
      white-space: nowrap;
      background: var(--gold-metallic);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      filter: drop-shadow(0 1px 2px rgba(0, 0, 0, 0.55));
    }

    .brand-block {
      display: flex;
      flex-direction: column;
      flex: 1;
      min-width: 240px;
    }

    .brand-name {
      font-size: 16px;
      font-weight: 800;
      letter-spacing: 0.3px;
    }

    .brand-role {
      font-size: 12px;
      color: #d1d5db;
    }

    .nav-group {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap: 18px;
    }

    .nav-links {
      display: flex;
      gap: 16px;
      flex-wrap: wrap;
    }

    .nav-links a {
      color: #f3f4f6;
      text-decoration: none;
      font-size: 13.5px;
      font-weight: 600;
    }

    .nav-links a:hover {
      color: #e8c367;
    }

    /* Чёрно-белый глобус переключения языка в стиле логотипа НГМК */
    .lang-globe-wrap {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: #ffffff;
      color: #111111;
      border: 1px solid #d1d5db;
      border-radius: 999px;
      padding: 4px 10px 4px 6px;
    }

    .globe-btn {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      border: 1.5px solid #111111;
      background: #ffffff;
      color: #111111;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      padding: 0;
      flex-shrink: 0;
    }

    .globe-btn:hover {
      background: #111111;
      color: #ffffff;
    }

    .globe-btn svg {
      width: 16px;
      height: 16px;
      stroke: currentColor;
      fill: none;
      stroke-width: 1.9;
    }

    .lang-codes {
      display: inline-flex;
      align-items: center;
      gap: 4px;
    }

    .lang-btn {
      background: transparent;
      border: none;
      color: #374151;
      padding: 3px 7px;
      border-radius: 999px;
      font-size: 11.5px;
      font-weight: 800;
      cursor: pointer;
    }

    .lang-btn.active {
      background: #111111;
      color: #ffffff;
    }

    .container {
      max-width: 1120px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .profile-hero {
      margin-top: 28px;
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 10px;
      box-shadow: 0 8px 26px rgba(20, 24, 29, 0.06);
      padding: 28px;
    }

    .profile-grid {
      display: grid;
      grid-template-columns: 270px 1fr;
      gap: 32px;
      align-items: start;
    }

    .portrait-box {
      width: 100%;
      aspect-ratio: 3 / 4;
      background: #ffffff;
      border: 1px solid var(--border);
      border-radius: 6px;
      overflow: hidden;
    }

    .portrait-box img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .quote-row {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      margin-bottom: 18px;
    }

    .gold-quotes {
      font-family: Georgia, "Times New Roman", serif;
      font-size: 54px;
      line-height: 0.75;
      font-weight: 900;
      background: var(--gold-metallic);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      user-select: none;
      flex-shrink: 0;
      padding-top: 6px;
    }

    .quote-body p {
      font-size: 15.5px;
      color: var(--text);
      margin-bottom: 10px;
    }

    .quote-body p:last-child {
      margin-bottom: 0;
    }

    .owner-signature {
      padding-left: 44px;
      margin-bottom: 18px;
    }

    .owner-name {
      font-size: 18px;
      font-weight: 800;
      color: var(--charcoal);
      margin-bottom: 3px;
    }

    .owner-sub {
      font-size: 13.5px;
      color: var(--muted);
      font-style: italic;
    }

    .meta-table {
      margin-left: 44px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 12px 20px;
      padding: 16px;
      background: var(--surface-alt);
      border: 1px solid var(--border);
      border-left: 3px solid var(--gold-solid);
      border-radius: 6px;
    }

    .meta-label {
      font-size: 11px;
      text-transform: uppercase;
      letter-spacing: 0.7px;
      color: var(--muted);
      font-weight: 700;
      display: block;
      margin-bottom: 2px;
    }

    .meta-val {
      font-size: 14px;
      font-weight: 700;
      color: var(--charcoal);
    }

    section.card-section {
      margin-top: 24px;
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 10px;
      padding: 28px;
      box-shadow: 0 6px 20px rgba(20, 24, 29, 0.04);
    }

    .section-title {
      font-size: 20px;
      font-weight: 800;
      color: var(--charcoal);
      padding-bottom: 12px;
      border-bottom: 2px solid var(--surface-alt);
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .section-title::before {
      content: "";
      width: 4px;
      height: 20px;
      background: var(--gold-metallic);
      border-radius: 2px;
      display: inline-block;
    }

    .uni-grid {
      display: grid;
      grid-template-columns: 350px 1fr;
      gap: 24px;
      align-items: center;
    }

    .uni-photo-wrap {
      border-radius: 6px;
      overflow: hidden;
      border: 1px solid var(--border);
      background: var(--surface-alt);
      aspect-ratio: 4 / 3;
    }

    .uni-photo-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .uni-details h3 {
      font-size: 18px;
      font-weight: 800;
      color: var(--charcoal);
      margin-bottom: 8px;
    }

    .uni-details p {
      font-size: 14px;
      color: #374151;
      margin-bottom: 14px;
    }

    .specs-list {
      list-style: none;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 10px;
    }

    .specs-list li {
      background: var(--surface-alt);
      border: 1px solid var(--border);
      border-radius: 6px;
      padding: 10px 12px;
      font-size: 13px;
      color: var(--charcoal);
    }

    .cert-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 16px;
    }

    .cert-card {
      background: var(--surface-alt);
      border: 1px solid var(--border);
      border-left: 4px solid var(--gold-solid);
      border-radius: 6px;
      padding: 18px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      gap: 10px;
    }

    .cert-issuer {
      font-size: 11.5px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.7px;
      color: #9a6b12;
    }

    .cert-title {
      font-size: 15.5px;
      font-weight: 800;
      color: var(--charcoal);
    }

    .cert-desc {
      font-size: 13.5px;
      color: #374151;
    }

    .cert-code {
      font-family: ui-monospace, SFMono-Regular, Menlo, monospace;
      font-size: 12px;
      color: var(--muted);
      background: #ffffff;
      border: 1px solid var(--border);
      padding: 5px 8px;
      border-radius: 4px;
      display: inline-block;
      align-self: flex-start;
    }

    /* Нижний блок контактов и места университета с золотистыми иконками */
    .contact-footer {
      margin-top: 28px;
      background: var(--charcoal-dark);
      color: #f3f4f6;
      border-top: 3px solid var(--gold-solid);
      padding: 30px 20px;
    }

    .contact-footer-inner {
      max-width: 1120px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 24px;
      align-items: start;
    }

    .cf-col-title {
      font-size: 12px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.8px;
      background: var(--gold-metallic);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      margin-bottom: 12px;
    }

    .cf-card {
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 8px;
      padding: 13px 15px;
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .cf-icon-wrap {
      width: 38px;
      height: 38px;
      border-radius: 8px;
      background: rgba(214, 164, 57, 0.12);
      border: 1px solid rgba(214, 164, 57, 0.35);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .cf-icon-wrap svg {
      width: 18px;
      height: 18px;
      stroke: #e5c46b;
      fill: none;
      stroke-width: 2;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .cf-info {
      display: flex;
      flex-direction: column;
    }

    .cf-label {
      display: block;
      font-size: 10.5px;
      text-transform: uppercase;
      letter-spacing: 0.7px;
      color: #9ca3af;
      margin-bottom: 2px;
    }

    .cf-value {
      font-size: 14px;
      font-weight: 700;
      color: #ffffff;
      text-decoration: none;
    }

    a.cf-value:hover {
      color: #e5c46b;
    }

    .cf-bottom {
      max-width: 1120px;
      margin: 18px auto 0;
      padding-top: 14px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      font-size: 12px;
      color: #9ca3af;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 8px;
    }

    .cookie-banner {
      position: fixed;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 60;
      background: var(--charcoal-dark);
      color: #ffffff;
      border-top: 2px solid var(--gold-solid);
      padding: 14px 20px;
      box-shadow: 0 -8px 28px rgba(0, 0, 0, 0.25);
    }

    .cookie-banner.hidden {
      display: none;
    }

    .cookie-inner {
      max-width: 1120px;
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 14px;
    }

    .cookie-text {
      font-size: 13px;
      color: #e5e7eb;
      flex: 1;
      min-width: 240px;
    }

    .cookie-accept-btn {
      background: var(--gold-metallic);
      color: #14181d;
      border: none;
      border-radius: 6px;
      padding: 9px 22px;
      font-size: 13px;
      font-weight: 800;
      cursor: pointer;
      white-space: nowrap;
    }

    .cookie-accept-btn:hover {
      filter: brightness(1.06);
    }

    @media (max-width: 820px) {
      .profile-grid,
      .uni-grid {
        grid-template-columns: 1fr;
      }

      .portrait-box {
        max-width: 250px;
      }

      .owner-signature,
      .meta-table {
        margin-left: 0;
      }

      .profile-hero,
      section.card-section {
        padding: 20px;
      }
    }
  </style>
</head>

<body>
  <header>
    <div class="header-inner">
      <a href="#" class="emblem-brand">
        <div class="emblem-box">
          <img src="photo_5379870254403625857_c.jpg" alt="Эмблема Ulogix Community" />
        </div>
        <span class="emblem-title">Ulogix Community</span>
      </a>

      <div class="brand-block">
        <span class="brand-name" data-i18n="header_name">Отабеков Улугбек Отабекович</span>
        <span class="brand-role" data-i18n="header_role">Владелец комьюнити и экосистемы Ulogix Community • Автоматизация и управление технологическими процессами и производством (по отраслям)</span>
      </div>

      <div class="nav-group">
        <nav class="nav-links">
          <a href="#profile" data-i18n="nav_profile">Профиль</a>
          <a href="#university" data-i18n="nav_university">Университет</a>
          <a href="#certificates" data-i18n="nav_certs">Курсы и сертификаты</a>
          <a href="#contacts" data-i18n="nav_contacts">Контакты</a>
        </nav>

        <div class="lang-globe-wrap" role="group" aria-label="Language switcher">
          <button type="button" class="globe-btn" onclick="cycleLanguage()" title="Сменить язык" aria-label="Сменить язык">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <circle cx="12" cy="12" r="9.5" />
              <ellipse cx="12" cy="12" rx="4.5" ry="9.5" />
              <line x1="2.5" y1="12" x2="21.5" y2="12" />
            </svg>
          </button>
          <div class="lang-codes">
            <button type="button" class="lang-btn active" data-lang="ru" onclick="setLanguage('ru')">РУ</button>
            <button type="button" class="lang-btn" data-lang="uz" onclick="setLanguage('uz')">O‘Z</button>
            <button type="button" class="lang-btn" data-lang="en" onclick="setLanguage('en')">EN</button>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="container">
    <section id="profile" class="profile-hero">
      <div class="profile-grid">
        <div class="portrait-box">
          <img src="photo_5201685143762967884_y.jpg" alt="Отабеков Улугбек Отабекович" />
        </div>

        <div>
          <div class="quote-row">
            <span class="gold-quotes" aria-hidden="true">”</span>
            <div class="quote-body">
              <p data-i18n="quote_p1">
                Я являюсь основателем и полноправным владельцем комьюнити и экосистемы <strong>Ulogix Community</strong> — объединяющей инженерные проекты, промышленную автоматизацию, разработку цифровых решений и техническое сообщество специалистов.
              </p>
              <p data-i18n="quote_p2">
                Владение экосистемой Ulogix Community строится на практическом применении автоматизации, разработке программных инструментов и подготовке кадров с опорой на реальные производственные задачи.
              </p>
            </div>
          </div>

          <div class="owner-signature">
            <div class="owner-name" data-i18n="full_name">Отабеков Улугбек Отабекович</div>
            <div class="owner-sub" data-i18n="owner_sub">Владелец комьюнити и экосистемы Ulogix Community</div>
          </div>

          <div class="meta-table">
            <div>
              <span class="meta-label" data-i18n="label_owner">Статус и владение</span>
              <span class="meta-val" data-i18n="val_owner">Владелец комьюнити и экосистемы Ulogix Community</span>
            </div>
            <div>
              <span class="meta-label" data-i18n="label_prof">Основная профессия</span>
              <span class="meta-val" data-i18n="val_prof">Машинист экскаватора 8 разряда</span>
            </div>
            <div>
              <span class="meta-label" data-i18n="label_birth">Дата рождения</span>
              <span class="meta-val" data-i18n="val_birth">06.08.2004</span>
            </div>
            <div>
              <span class="meta-label" data-i18n="label_spec">Направление подготовки</span>
              <span class="meta-val" data-i18n="val_spec">Автоматизация и управление технологическими процессами и производством (по отраслям)</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="university" class="card-section">
      <h2 class="section-title" data-i18n="sec_university">Университет и академическая подготовка</h2>

      <div class="uni-grid">
        <div class="uni-photo-wrap">
          <img src="photo_5393108078049299575_c.jpg" alt="Навоийский государственный горно-технологический университет" />
        </div>

        <div class="uni-details">
          <h3 data-i18n="uni_title">Навоийский государственный горно-технологический университет</h3>
          <p data-i18n="uni_desc">
            Подготовка по направлению автоматизации и управления технологическими процессами и производством (по отраслям) на факультете энергомеханики с фокусом на прикладную автоматизацию, инженерные расчёты и современные цифровые системы управления.
          </p>

          <ul class="specs-list">
            <li data-i18n="uni_item_1"><strong>Факультет:</strong> Энергомеханика</li>
            <li data-i18n="uni_item_2"><strong>Специальность:</strong> Автоматизация и управление технологическими процессами и производством (по отраслям)</li>
            <li data-i18n="uni_item_3"><strong>Учебная группа:</strong> АПП</li>
            <li data-i18n="uni_item_4"><strong>Город:</strong> Навои, Узбекистан</li>
          </ul>
        </div>
      </div>
    </section>

    <section id="certificates" class="card-section">
      <h2 class="section-title" data-i18n="sec_certs">Завершённые курсы и сертификаты</h2>

      <div class="cert-grid">
        <article class="cert-card">
          <div>
            <div class="cert-issuer" data-i18n="c1_issuer">НУУ «Кончи инновация Навоий» • Протокол № 155</div>
            <h3 class="cert-title" data-i18n="c1_title">Машинист экскаватора 8 разряда</h3>
            <p class="cert-desc" data-i18n="c1_desc">
              Удостоверение № 1487 от 06.11.2026 (обучение 10.09.2026–05.11.2026): допуск и эксплуатация экскаваторов марок ЭКГ 5а, 8и, 10, 12.5, 15, 20.
            </p>
          </div>
          <span class="cert-code" data-i18n="c1_code">Удостоверение № 1487 • 8 разряд</span>
        </article>

        <article class="cert-card">
          <div>
            <div class="cert-issuer" data-i18n="c2_issuer">Microsoft Learn</div>
            <h3 class="cert-title" data-i18n="c2_title">Azure Fundamentals &amp; Security, Compliance, and Identity</h3>
            <p class="cert-desc" data-i18n="c2_desc">
              Подтверждённая подготовка по облачным основам, информационной безопасности, соответствию требованиям и управлению доступом.
            </p>
          </div>
          <span class="cert-code">MS-890123-U0456-M12A</span>
        </article>

        <article class="cert-card">
          <div>
            <div class="cert-issuer" data-i18n="c3_issuer">WorldSkills Uzbekistan</div>
            <h3 class="cert-title" data-i18n="c3_title">Сертификат компетенции (39 WSI)</h3>
            <p class="cert-desc" data-i18n="c3_desc">
              Официальный сертификат участника и специалиста по стандартам профессиональных компетенций WorldSkills.
            </p>
          </div>
          <span class="cert-code">WSU-323 • 39 WSI</span>
        </article>

        <article class="cert-card">
          <div>
            <div class="cert-issuer" data-i18n="c4_issuer">Национальная программа «1.000.000 кодеров»</div>
            <h3 class="cert-title" data-i18n="c4_title">Сертификат веб-разработчика</h3>
            <p class="cert-desc" data-i18n="c4_desc">
              Завершённый курс по веб-разработке, созданию интерфейсов и прикладных программных модулей.
            </p>
          </div>
          <span class="cert-code" data-i18n="c4_code">Веб-разработка • Сертифицирован</span>
        </article>

        <article class="cert-card">
          <div>
            <div class="cert-issuer" data-i18n="c5_issuer">Microsoft Learn</div>
            <h3 class="cert-title" data-i18n="c5_title">Microsoft Copilot Studio</h3>
            <p class="cert-desc" data-i18n="c5_desc">
              Практическое обучение по проектированию и настройке интеллектуальных ассистентов и автоматизированных сценариев.
            </p>
          </div>
          <span class="cert-code" data-i18n="c5_code">AI &amp; Automation • Badge</span>
        </article>

        <article class="cert-card">
          <div>
            <div class="cert-issuer" data-i18n="c6_issuer">test.adliya.uz</div>
            <h3 class="cert-title" data-i18n="c6_title">Трудовое законодательство Республики Узбекистан</h3>
            <p class="cert-desc" data-i18n="c6_desc">
              Успешно пройденные онлайн-аттестации по нормам и положениям Трудового кодекса Республики Узбекистан.
            </p>
          </div>
          <span class="cert-code" data-i18n="c6_code">Трудовой кодекс РУз</span>
        </article>
      </div>
    </section>
  </main>

  <footer id="contacts" class="contact-footer">
    <div class="contact-footer-inner">
      <div>
        <div class="cf-col-title" data-i18n="cf_personal_title">Прямая связь • Ulogix Community</div>

        <div class="cf-card">
          <div class="cf-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
            </svg>
          </div>
          <div class="cf-info">
            <span class="cf-label" data-i18n="cf_phone_label">Телефон</span>
            <a class="cf-value" href="tel:+998507771661">+998 50 777-16-61</a>
          </div>
        </div>

        <div class="cf-card">
          <div class="cf-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <rect x="2" y="4" width="20" height="16" rx="2" />
              <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
            </svg>
          </div>
          <div class="cf-info">
            <span class="cf-label" data-i18n="cf_email_label">Электронная почта</span>
            <a class="cf-value" href="mailto:info@ouoofficial.uz">info@ouoofficial.uz</a>
          </div>
        </div>
      </div>

      <div>
        <div class="cf-col-title" data-i18n="cf_place_title">Место университета</div>

        <div class="cf-card">
          <div class="cf-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
          </div>
          <div class="cf-info">
            <span class="cf-label" data-i18n="cf_uni_place_label">Место университета</span>
            <span class="cf-value" data-i18n="cf_uni_place_val">Навоийский государственный горно-технологический университет • г. Навои, ул. Галабашох</span>
          </div>
        </div>
      </div>
    </div>

    <div class="cf-bottom">
      <span data-i18n="footer_left">Отабеков Улугбек Отабекович • 06.08.2004 • Владелец Ulogix Community</span>
      <span data-i18n="footer_right">Место университета: г. Навои, ул. Галабашох</span>
    </div>
  </footer>

  <div id="cookieBanner" class="cookie-banner" role="dialog" aria-live="polite">
    <div class="cookie-inner">
      <p class="cookie-text" data-i18n="cookie_text">
        Этот сайт использует файлы cookie для корректной работы интерфейса и сохранения выбранного языка.
      </p>
      <button type="button" class="cookie-accept-btn" onclick="acceptCookies()" data-i18n="cookie_accept">
        Принять
      </button>
    </div>
  </div>

  <script>
    const LANGS = ["ru", "uz", "en"];
    let currentLang = "ru";

    const I18N = {
      ru: {
        doc_title: "Отабеков Улугбек Отабекович | Ulogix Community",
        header_name: "Отабеков Улугбек Отабекович",
        header_role: "Владелец комьюнити и экосистемы Ulogix Community • Автоматизация и управление технологическими процессами и производством (по отраслям)",
        nav_profile: "Профиль",
        nav_university: "Университет",
        nav_certs: "Курсы и сертификаты",
        nav_contacts: "Контакты",
        quote_p1: "Я являюсь основателем и полноправным владельцем комьюнити и экосистемы <strong>Ulogix Community</strong> — объединяющей инженерные проекты, промышленную автоматизацию, разработку цифровых решений и техническое сообщество специалистов.",
        quote_p2: "Владение экосистемой Ulogix Community строится на практическом применении автоматизации, разработке программных инструментов и подготовке кадров с опорой на реальные производственные задачи.",
        full_name: "Отабеков Улугбек Отабекович",
        owner_sub: "Владелец комьюнити и экосистемы Ulogix Community",
        label_owner: "Статус и владение",
        val_owner: "Владелец комьюнити и экосистемы Ulogix Community",
        label_prof: "Основная профессия",
        val_prof: "Машинист экскаватора 8 разряда",
        label_birth: "Дата рождения",
        val_birth: "06.08.2004",
        label_spec: "Направление подготовки",
        val_spec: "Автоматизация и управление технологическими процессами и производством (по отраслям)",
        sec_university: "Университет и академическая подготовка",
        uni_title: "Навоийский государственный горно-технологический университет",
        uni_desc: "Подготовка по направлению автоматизации и управления технологическими процессами и производством (по отраслям) на факультете энергомеханики с фокусом на прикладную автоматизацию, инженерные расчёты и современные цифровые системы управления.",
        uni_item_1: "<strong>Факультет:</strong> Энергомеханика",
        uni_item_2: "<strong>Специальность:</strong> Автоматизация и управление технологическими процессами и производством (по отраслям)",
        uni_item_3: "<strong>Учебная группа:</strong> АПП",
        uni_item_4: "<strong>Город:</strong> Навои, Узбекистан",
        sec_certs: "Завершённые курсы и сертификаты",
        c1_issuer: "НУУ «Кончи инновация Навоий» • Протокол № 155",
        c1_title: "Машинист экскаватора 8 разряда",
        c1_desc: "Удостоверение № 1487 от 06.11.2026 (обучение 10.09.2026–05.11.2026): допуск и эксплуатация экскаваторов марок ЭКГ 5а, 8и, 10, 12.5, 15, 20.",
        c1_code: "Удостоверение № 1487 • 8 разряд",
        c2_issuer: "Microsoft Learn",
        c2_title: "Azure Fundamentals & Security, Compliance, and Identity",
        c2_desc: "Подтверждённая подготовка по облачным основам, информационной безопасности, соответствию требованиям и управлению доступом.",
        c3_issuer: "WorldSkills Uzbekistan",
        c3_title: "Сертификат компетенции (39 WSI)",
        c3_desc: "Официальный сертификат участника и специалиста по стандартам профессиональных компетенций WorldSkills.",
        c4_issuer: "Национальная программа «1.000.000 кодеров»",
        c4_title: "Сертификат веб-разработчика",
        c4_desc: "Завершённый курс по веб-разработке, созданию интерфейсов и прикладных программных модулей.",
        c4_code: "Веб-разработка • Сертифицирован",
        c5_issuer: "Microsoft Learn",
        c5_title: "Microsoft Copilot Studio",
        c5_desc: "Практическое обучение по проектированию и настройке интеллектуальных ассистентов и автоматизированных сценариев.",
        c5_code: "AI & Automation • Badge",
        c6_issuer: "test.adliya.uz",
        c6_title: "Трудовое законодательство Республики Узбекистан",
        c6_desc: "Успешно пройденные онлайн-аттестации по нормам и положениям Трудового кодекса Республики Узбекистан.",
        c6_code: "Трудовой кодекс РУз",
        cf_personal_title: "Прямая связь • Ulogix Community",
        cf_phone_label: "Телефон",
        cf_email_label: "Электронная почта",
        cf_place_title: "Место университета",
        cf_uni_place_label: "Место университета",
        cf_uni_place_val: "Навоийский государственный горно-технологический университет • г. Навои, ул. Галабашох",
        footer_left: "Отабеков Улугбек Отабекович • 06.08.2004 • Владелец Ulogix Community",
        footer_right: "Место университета: г. Навои, ул. Галабашох",
        cookie_text: "Этот сайт использует файлы cookie для корректной работы интерфейса и сохранения выбранного языка.",
        cookie_accept: "Принять"
      },
      uz: {
        doc_title: "Otabekov Ulug‘bek Otabekovich | Ulogix Community",
        header_name: "Otabekov Ulug‘bek Otabekovich",
        header_role: "Ulogix Community kom‘yuniti va ekotizimi egasi • Texnologik jarayonlar va ishlab chiqarishni avtomatlashtirish va boshqarish (tarmoqlar bo‘yicha)",
        nav_profile: "Profil",
        nav_university: "Universitet",
        nav_certs: "Kurslar va sertifikatlar",
        nav_contacts: "Aloqa",
        quote_p1: "Men muhandislik loyihalari, sanoat avtomatizatsiyasi, raqamli yechimlar ishlab chiqish va mutaxassislar hamjamiyatini birlashtiruvchi <strong>Ulogix Community</strong> kom‘yuniti va ekotizimining asoschisi hamda to‘laqonli egasiman.",
        quote_p2: "Ulogix Community ekotizimiga egalik qilish avtomatlashtirishni amaliy qo‘llash, dasturiy vositalar yaratish va real ishlab chiqarish vazifalariga tayangan holda kadrlar tayyorlashga asoslanadi.",
        full_name: "Otabekov Ulug‘bek Otabekovich",
        owner_sub: "Ulogix Community kom‘yuniti va ekotizimi egasi",
        label_owner: "Maqom va egalik",
        val_owner: "Ulogix Community kom‘yuniti va ekotizimi egasi",
        label_prof: "Asosiy kasb",
        val_prof: "8-razryadli ekskavator mashinisti",
        label_birth: "Tug‘ilgan sana",
        val_birth: "06.08.2004",
        label_spec: "Tayyorlov yo‘nalishi",
        val_spec: "Texnologik jarayonlar va ishlab chiqarishni avtomatlashtirish va boshqarish (tarmoqlar bo‘yicha)",
        sec_university: "Universitet va akademik tayyorgarlik",
        uni_title: "Navoiy davlat konchilik va texnologiyalar universiteti",
        uni_desc: "Energetika va mexanika fakultetida texnologik jarayonlar va ishlab chiqarishni avtomatlashtirish va boshqarish (tarmoqlar bo‘yicha) yo‘nalishi bo‘yicha amaliy avtomatlashtirish, muhandislik hisob-kitoblari va zamonaviy boshqaruv tizimlariga yo‘naltirilgan tayyorgarlik.",
        uni_item_1: "<strong>Fakultet:</strong> Energetika va mexanika",
        uni_item_2: "<strong>Mutaxassislik:</strong> Texnologik jarayonlar va ishlab chiqarishni avtomatlashtirish va boshqarish (tarmoqlar bo‘yicha)",
        uni_item_3: "<strong>O‘quv guruhi:</strong> APP",
        uni_item_4: "<strong>Shahar:</strong> Navoiy, O‘zbekiston",
        sec_certs: "Tugallangan kurslar va sertifikatlar",
        c1_issuer: "«Konchi innovatsiya Navoiy» NTM • 155-sonli bayonnoma",
        c1_title: "8-razryadli ekskavator mashinisti",
        c1_desc: "06.11.2026 yildagi 1487-sonli guvohnoma (o‘qish: 10.09.2026–05.11.2026): EKG 5a, 8i, 10, 12.5, 15, 20 rusumli ekskavatorlarni boshqarish va ekspluatatsiya qilish.",
        c1_code: "Guvohnoma № 1487 • 8-razryad",
        c2_issuer: "Microsoft Learn",
        c2_title: "Azure Fundamentals & Security, Compliance, and Identity",
        c2_desc: "Bulutli asoslar, axborot xavfsizligi, muvofiqlik talablari va kirishni boshqarish bo‘yicha tasdiqlangan tayyorgarlik.",
        c3_issuer: "WorldSkills Uzbekistan",
        c3_title: "Kompetensiya sertifikati (39 WSI)",
        c3_desc: "WorldSkills kasbiy kompetensiyalar standartlari bo‘yicha mutaxassis sertifikati.",
        c4_issuer: "«Bir million dasturchi» milliy dasturi",
        c4_title: "Veb-dasturchi sertifikati",
        c4_desc: "Veb-ishlanma, interfeyslar yaratish va amaliy dasturiy modullar bo‘yicha yakunlangan kurs.",
        c4_code: "Veb-dasturlash • Sertifikatlangan",
        c5_issuer: "Microsoft Learn",
        c5_title: "Microsoft Copilot Studio",
        c5_desc: "Intellektual yordamchilar va avtomatlashtirilgan ssenariylarni loyihalash hamda sozlash bo‘yicha amaliy o‘qish.",
        c5_code: "AI & Automation • Badge",
        c6_issuer: "test.adliya.uz",
        c6_title: "O‘zbekiston Respublikasi Mehnat qonunchiligi",
        c6_desc: "O‘zbekiston Respublikasi Mehnat kodeksi normalari va qoidalari bo‘yicha muvaffaqiyatli topshirilgan onlayn imtihonlar.",
        c6_code: "O‘zR Mehnat kodeksi",
        cf_personal_title: "To‘g‘ridan-to‘g‘ri aloqa • Ulogix Community",
        cf_phone_label: "Telefon",
        cf_email_label: "Elektron pochta",
        cf_place_title: "Universitet joylashuvi",
        cf_uni_place_label: "Universitet joylashuvi",
        cf_uni_place_val: "Navoiy davlat konchilik va texnologiyalar universiteti • Navoiy sh., G‘alabashoh ko‘chasi",
        footer_left: "Otabekov Ulug‘bek Otabekovich • 06.08.2004 • Ulogix Community egasi",
        footer_right: "Universitet joylashuvi: Navoiy sh., G‘alabashoh ko‘chasi",
        cookie_text: "Ushbu sayt interfeysning to‘g‘ri ishlashi va tanlangan tilni saqlash uchun cookie fayllaridan foydalanadi.",
        cookie_accept: "Qabul qilish"
      },
      en: {
        doc_title: "Otabekov Ulugbek Otabekovich | Ulogix Community",
        header_name: "Otabekov Ulugbek Otabekovich",
        header_role: "Owner of Ulogix Community & Ecosystem • Automation and Control of Technological Processes and Production (by Industries)",
        nav_profile: "Profile",
        nav_university: "University",
        nav_certs: "Courses & Certificates",
        nav_contacts: "Contacts",
        quote_p1: "I am the founder and owner of the <strong>Ulogix Community</strong> and ecosystem, uniting engineering projects, industrial automation, digital software solutions, and a technical community of specialists.",
        quote_p2: "Ownership of the Ulogix Community ecosystem is built on practical automation, software tool development, and specialist training grounded in real industrial operations.",
        full_name: "Otabekov Ulugbek Otabekovich",
        owner_sub: "Owner of Ulogix Community & Ecosystem",
        label_owner: "Status & Ownership",
        val_owner: "Owner of Ulogix Community & Ecosystem",
        label_prof: "Primary Profession",
        val_prof: "8th-Grade Excavator Operator",
        label_birth: "Date of Birth",
        val_birth: "06.08.2004",
        label_spec: "Field of Study",
        val_spec: "Automation and Control of Technological Processes and Production (by Industries)",
        sec_university: "University & Academic Background",
        uni_title: "Navoi State University of Mining and Technologies",
        uni_desc: "Training in Automation and Control of Technological Processes and Production (by Industries) at the Faculty of Power Mechanics with a focus on applied automation, engineering calculations, and modern control systems.",
        uni_item_1: "<strong>Faculty:</strong> Power Mechanics",
        uni_item_2: "<strong>Major:</strong> Automation and Control of Technological Processes and Production (by Industries)",
        uni_item_3: "<strong>Group:</strong> APP",
        uni_item_4: "<strong>City:</strong> Navoi, Uzbekistan",
        sec_certs: "Completed Courses & Certificates",
        c1_issuer: "NEI \"Konchi Innovatsiya Navoiy\" • Protocol No. 155",
        c1_title: "8th-Grade Excavator Operator",
        c1_desc: "Certificate No. 1487 dated 06.11.2026 (training 10.09.2026–05.11.2026): operation of EKG 5a, 8i, 10, 12.5, 15, and 20 excavators.",
        c1_code: "Certificate No. 1487 • 8th Grade",
        c2_issuer: "Microsoft Learn",
        c2_title: "Azure Fundamentals & Security, Compliance, and Identity",
        c2_desc: "Verified training in cloud fundamentals, information security, compliance, and identity management.",
        c3_issuer: "WorldSkills Uzbekistan",
        c3_title: "Competency Certificate (39 WSI)",
        c3_desc: "Official certificate aligned with WorldSkills professional competency standards.",
        c4_issuer: "One Million Uzbek Coders",
        c4_title: "Web Developer Certificate",
        c4_desc: "Completed course in web development, user interfaces, and applied software modules.",
        c4_code: "Web Development • Certified",
        c5_issuer: "Microsoft Learn",
        c5_title: "Microsoft Copilot Studio",
        c5_desc: "Hands-on training in designing and configuring intelligent assistants and automated workflows.",
        c5_code: "AI & Automation • Badge",
        c6_issuer: "test.adliya.uz",
        c6_title: "Labor Legislation of the Republic of Uzbekistan",
        c6_desc: "Successfully passed online assessments on the provisions of the Labor Code of the Republic of Uzbekistan.",
        c6_code: "Labor Code of Uzbekistan",
        cf_personal_title: "Direct Contact • Ulogix Community",
        cf_phone_label: "Phone",
        cf_email_label: "Email",
        cf_place_title: "University Location",
        cf_uni_place_label: "University Location",
        cf_uni_place_val: "Navoi State University of Mining and Technologies • Galabashoh Street, Navoi",
        footer_left: "Otabekov Ulugbek Otabekovich • 06.08.2004 • Owner of Ulogix Community",
        footer_right: "University Location: Galabashoh Street, Navoi",
        cookie_text: "This website uses cookies to ensure proper interface operation and remember your selected language.",
        cookie_accept: "Accept"
      }
    };

    function setLanguage(lang) {
      currentLang = I18N[lang] ? lang : "ru";
      const dict = I18N[currentLang];
      document.documentElement.lang = currentLang === "uz" ? "uz" : currentLang;
      document.title = dict.doc_title;

      document.querySelectorAll("[data-i18n]").forEach((el) => {
        const key = el.getAttribute("data-i18n");
        if (dict[key] !== undefined) {
          el.innerHTML = dict[key];
        }
      });

      document.querySelectorAll(".lang-btn").forEach((btn) => {
        btn.classList.toggle("active", btn.getAttribute("data-lang") === currentLang);
      });

      try {
        localStorage.setItem("site_lang", currentLang);
      } catch (e) {}
    }

    function cycleLanguage() {
      const idx = LANGS.indexOf(currentLang);
      const nextLang = LANGS[(idx + 1) % LANGS.length];
      setLanguage(nextLang);
    }

    function acceptCookies() {
      try {
        localStorage.setItem("cookie_accepted", "1");
      } catch (e) {}
      document.getElementById("cookieBanner").classList.add("hidden");
    }

    (function init() {
      let savedLang = "ru";
      let cookieOk = false;
      try {
        savedLang = localStorage.getItem("site_lang") || "ru";
        cookieOk = localStorage.getItem("cookie_accepted") === "1";
      } catch (e) {}

      setLanguage(savedLang);
      if (cookieOk) {
        document.getElementById("cookieBanner").classList.add("hidden");
      }
    })();
  </script>
</body>

</html>
