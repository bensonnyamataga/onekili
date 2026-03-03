<!-- ============================================================
FLOATING BLOG LINKS (LEFT) — ONE FILE PLUGIN
Save as: plugins/floating-blog-left.php  (or .html) and include anywhere (recommended before </body>)
Edit only the <a href="..."> links + text inside the list.
Prefix: fbnav_
============================================================= -->

<style>
  /* ===== Floating Blog Nav (Left) — Minimal, Conflict-Free ===== */
  :root{
    --fbnav-top-offset: 110px;   /* adjust if your header height changes */
    --fbnav-width: 240px;
    --fbnav-radius: 12px;
    --fbnav-bg: #ffffff;
    --fbnav-border: rgba(0,0,0,0.10);
    --fbnav-text: #1a1a1a;
    --fbnav-muted: #555;
  }

  .fbnav-wrap{
    position: fixed;
    top: var(--fbnav-top-offset);
    left: 16px;
    width: var(--fbnav-width);
    z-index: 1200; /* above content, below heavy modals */
    font-family: inherit;
  }

  .fbnav-card{
    background: var(--fbnav-bg);
    border: 1px solid var(--fbnav-border);
    border-radius: var(--fbnav-radius);
    box-shadow: 0 8px 24px rgba(0,0,0,0.08);
    overflow: hidden;
  }

  .fbnav-head{
    padding: 14px 14px 10px;
    border-bottom: 1px solid rgba(0,0,0,0.06);
  }

  .fbnav-title{
    margin: 0;
    font-size: 14px;
    font-weight: 700;
    color: var(--fbnav-text);
    letter-spacing: 0.3px;
  }

  .fbnav-subtitle{
    margin: 6px 0 0;
    font-size: 12px;
    color: var(--fbnav-muted);
    line-height: 1.4;
  }

  .fbnav-list{
    list-style: none;
    margin: 0;
    padding: 10px 0;
    max-height: calc(100vh - var(--fbnav-top-offset) - 40px);
    overflow: auto;
  }

  .fbnav-item{
    margin: 0;
    padding: 0;
  }

  .fbnav-link{
    display: block;
    padding: 10px 14px;
    color: var(--fbnav-text);
    text-decoration: none;
    font-size: 13px;
    line-height: 1.3;
    border-left: 3px solid transparent;
  }

  .fbnav-link:hover,
  .fbnav-link:focus{
    outline: none;
    background: rgba(0,0,0,0.03);
    border-left-color: rgba(0,0,0,0.25);
  }

  .fbnav-link small{
    display: block;
    margin-top: 4px;
    color: var(--fbnav-muted);
    font-size: 11px;
    line-height: 1.35;
  }

  /* ===== Mobile / Small screens: collapsible drawer ===== */
  .fbnav-toggle{
    position: fixed;
    left: 12px;
    bottom: 18px;
    z-index: 1201;
    width: 44px;
    height: 44px;
    border-radius: 999px;
    border: 1px solid var(--fbnav-border);
    background: var(--fbnav-bg);
    color: var(--fbnav-text);
    box-shadow: 0 10px 24px rgba(0,0,0,0.12);
    cursor: pointer;
    display: none; /* enabled on small screens */
    font-size: 18px;
    line-height: 1;
  }

  .fbnav-backdrop{
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.25);
    z-index: 1199;
    display: none;
  }

  /* When collapsed mode is active */
  .fbnav-wrap.fbnav-collapsed{
    transform: translateX(calc(-1 * (var(--fbnav-width) + 32px)));
    transition: transform .22s ease;
  }
  .fbnav-wrap.fbnav-open{
    transform: translateX(0);
    transition: transform .22s ease;
  }

  /* Breakpoint: hide fixed left card & use toggle (drawer) */
  @media (max-width: 1200px){
    .fbnav-toggle{ display: inline-flex; align-items:center; justify-content:center; }
    .fbnav-wrap{
      left: 12px;
      top: 90px;
    }
    .fbnav-wrap.fbnav-collapsed{ transform: translateX(calc(-1 * (var(--fbnav-width) + 28px))); }
  }

  /* Small phones */
  @media (max-width: 480px){
    :root{ --fbnav-width: 86vw; }
  }
</style>

<!-- Floating Blog Links (Left) -->
<div class="fbnav-backdrop" id="fbnavBackdrop" aria-hidden="true"></div>

<button class="fbnav-toggle" id="fbnavToggle" type="button" aria-label="Open blog links">
  ☰
</button>

<aside class="fbnav-wrap" id="fbnavWrap" aria-label="Blog links">
  <div class="fbnav-card">
    <div class="fbnav-head">
      <p class="fbnav-title">Blog Articles</p>
      <p class="fbnav-subtitle">Quick links while browsing</p>
    </div>

    <ul class="fbnav-list">
      <!-- EDIT LINKS BELOW -->
      <li class="fbnav-item">
        <a class="fbnav-link" href="kilimanjaro-packing-list.html">
          Kilimanjaro packing list
          <small>What to bring for summit day + camps</small>
        </a>
      </li>

      <li class="fbnav-item">
        <a class="fbnav-link" href="kilimanjaro-food-on-the-mountain.html">
          Kilimanjaro food
          <small>Meals, hydration, and energy tips</small>
        </a>
      </li>

      <li class="fbnav-item">
        <a class="fbnav-link" href="altitude-sickness-kilimanjaro-guide.html">
          Altitude sickness guide
          <small>Symptoms, prevention, and safety</small>
        </a>
      </li>

      <li class="fbnav-item">
        <a class="fbnav-link" href="best-time-to-climb-kilimanjaro.html">
          Best time to climb
          <small>Seasons, weather, and visibility</small>
        </a>
      </li>

      <li class="fbnav-item">
        <a class="fbnav-link" href="kilimanjaro-tipping-guidelines.html">
          Tipping guidelines
          <small>Recommended tips for guides & porters</small>
        </a>
      </li>

      <li class="fbnav-item">
        <a class="fbnav-link" href="machame-route-vs-lemosho-route.html">
          Machame vs Lemosho
          <small>Which route fits your style</small>
        </a>
      </li>

      <li class="fbnav-item">
        <a class="fbnav-link" href="kilimanjaro-training-plan.html">
          Training plan
          <small>Fitness prep checklist before arrival</small>
        </a>
      </li>
      <!-- END EDIT LINKS -->
    </ul>
  </div>
</aside>

<script>
  (function(){
    const wrap = document.getElementById('fbnavWrap');
    const btn  = document.getElementById('fbnavToggle');
    const back = document.getElementById('fbnavBackdrop');

    if(!wrap || !btn || !back) return;

    function isSmall(){
      return window.matchMedia('(max-width: 1200px)').matches;
    }

    function openNav(){
      wrap.classList.remove('fbnav-collapsed');
      wrap.classList.add('fbnav-open');
      back.style.display = 'block';
      back.setAttribute('aria-hidden','false');
      btn.setAttribute('aria-label','Close blog links');
      document.documentElement.style.overflow = 'hidden';
    }

    function closeNav(){
      wrap.classList.remove('fbnav-open');
      wrap.classList.add('fbnav-collapsed');
      back.style.display = 'none';
      back.setAttribute('aria-hidden','true');
      btn.setAttribute('aria-label','Open blog links');
      document.documentElement.style.overflow = '';
    }

    function syncMode(){
      if(isSmall()){
        // drawer mode
        if(!wrap.classList.contains('fbnav-open')) wrap.classList.add('fbnav-collapsed');
      } else {
        // desktop mode (always visible)
        wrap.classList.remove('fbnav-collapsed','fbnav-open');
        back.style.display = 'none';
        back.setAttribute('aria-hidden','true');
        document.documentElement.style.overflow = '';
      }
    }

    btn.addEventListener('click', function(){
      if(!isSmall()) return;
      if(wrap.classList.contains('fbnav-open')) closeNav();
      else openNav();
    });

    back.addEventListener('click', closeNav);

    document.addEventListener('keydown', function(e){
      if(e.key === 'Escape' && wrap.classList.contains('fbnav-open')) closeNav();
    });

    window.addEventListener('resize', syncMode);
    syncMode();
  })();
</script>