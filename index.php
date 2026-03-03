<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>奇趣分分彩开奖结果 | 奇趣分分彩官网</title>
    <meta name="description" content="奇趣分分彩官网提供奇趣开奖结果查询​，本站为您提供实时的奇趣分分彩开奖结果。">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="format-detection" content="telephone=no, email=no, adress=no">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@500;700&display=swap');
        body { font-family: 'Inter', sans-serif; -webkit-tap-highlight-color: transparent; }
        .mono { font-family: 'JetBrains Mono', monospace; }
        .ball-red { background: linear-gradient(135deg, #f87171 0%, #dc2626 100%); }
        .ball-blue { background: linear-gradient(135deg, #60a5fa 0%, #2563eb 100%); }
        .glass { background: rgba(17, 24, 39, 0.8); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); }
        .responsive-ball {
            @apply w-14 h-20 sm:w-16 sm:h-20 rounded-2xl flex flex-col items-center justify-center shadow-xl border-t border-white/20;
        }
        .ball-red.responsive-ball, .ball-blue.responsive-ball {
        }
        @media (max-width: 480px) {
            .table-px { padding-left: 1rem; padding-right: 1rem; }
            .mono-sm { font-size: 0.75rem; }
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-200 min-h-screen p-3 sm:p-4 md:p-8">

    <div class="max-w-4xl mx-auto">
        <div class="flex flex-row justify-between items-center mb-5 gap-2">
            <div class="flex-1 min-w-0">
                <h1 class="text-xl sm:text-2xl md:text-3xl font-black tracking-tighter text-white flex items-center gap-2">
                    <span class="w-2 h-6 sm:w-3 sm:h-8 bg-blue-600 rounded-full"></span>
                    <span class="truncate">奇趣分分彩开奖结果</span>
                </h1>
                <p class="text-slate-500 text-[0.6rem] sm:text-xs mt-0.5 uppercase tracking-widest truncate">奇趣分分彩数据</p>
            </div>
            <div class="flex items-center gap-3 flex-shrink-0">
                <div class="text-right hidden xs:block"> 
                    <div id="status-text" class="text-[0.6rem] font-bold text-green-500 uppercase">系统正常</div>
                    <div id="last-update" class="text-[0.55rem] text-slate-500 mono">Checking...</div>
                </div>
                <div class="block xs:hidden text-right">
                    <div id="status-text-small" class="text-[0.6rem] font-bold text-green-500 uppercase" title="系统正常">●</div>
                </div>
                <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-2xl bg-slate-900 border border-slate-800 flex items-center justify-center flex-shrink-0">
                    <div id="sync-indicator" class="w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-blue-500 shadow-[0_0_10px_#3b82f6]"></div>
                </div>
            </div>
        </div>

        <div class="glass border border-slate-800 rounded-3xl sm:rounded-[2.5rem] p-5 sm:p-6 md:p-12 mb-6 shadow-2xl relative overflow-hidden">
            <div class="absolute top-2 right-2 sm:top-8 sm:right-8 opacity-10 select-none">
                <span class="text-slate-700 font-black text-5xl sm:text-7xl md:text-8xl mono" id="bg-period">0000</span>
            </div>
            
            <div class="relative z-10">
                <div class="mb-4 sm:mb-6">
                    <span class="bg-blue-600/10 text-blue-400 text-[0.65rem] sm:text-xs font-bold px-2 py-0.5 sm:px-3 sm:py-1 rounded-full border border-blue-500/20 uppercase tracking-tighter">最新奇趣分分彩结果</span>
                    <h2 class="text-slate-400 mt-2 sm:mt-3 text-xs sm:text-sm font-medium flex items-center flex-wrap gap-1">
                        当前期号: 
                        <span id="top-period" class="text-white mono ml-1 truncate max-w-[150px] sm:max-w-none">---</span>
                    </h2>
                </div>

                <div class="flex flex-wrap justify-center gap-2 sm:gap-3 mb-6 sm:mb-8" id="lucky-balls">
                </div>

                <div class="grid grid-cols-3 gap-2 sm:gap-4 pt-4 sm:pt-6 border-t border-slate-800/50">
                    <div class="min-w-0">
                        <p class="text-slate-500 text-[0.55rem] sm:text-xs uppercase mb-0.5 truncate">在线人数 (Raw)</p>
                        <p id="top-raw" class="text-base sm:text-lg md:text-xl font-bold text-white mono truncate">0</p>
                    </div>
                    <div class="min-w-0">
                        <p class="text-slate-500 text-[0.55rem] sm:text-xs uppercase mb-0.5 truncate">和尾</p>
                        <p id="top-tail" class="text-base sm:text-lg md:text-xl font-bold text-red-500 mono truncate">0</p>
                    </div>
                    <div class="min-w-0">
                        <p class="text-slate-500 text-[0.55rem] sm:text-xs uppercase mb-0.5 truncate">更新时间</p>
                        <p id="top-time" class="text-base sm:text-lg md:text-xl font-bold text-slate-300 mono truncate">--:--:--</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-slate-900/50 border border-slate-800 rounded-2xl sm:rounded-3xl overflow-hidden shadow-xl">
            <div class="px-4 sm:px-6 py-3 border-b border-slate-800 bg-slate-900/80 flex justify-between items-center">
                <h3 class="font-bold text-xs sm:text-sm">最近历史</h3>
                <span class="text-[0.5rem] sm:text-[0.65rem] text-slate-500 uppercase tracking-widest">Last 10</span>
            </div>
            <div class="overflow-x-auto scrollbar-thin scrollbar-thumb-slate-700">
                <table class="w-full text-left table-auto">
                    <thead class="text-slate-500 text-[0.55rem] sm:text-[0.65rem] uppercase tracking-wider">
                        <tr>
                            <th class="px-3 sm:px-6 py-3 font-semibold whitespace-nowrap">期号</th>
                            <th class="px-2 sm:px-4 py-3 font-semibold text-center whitespace-nowrap">开出号码</th>
                            <th class="px-3 sm:px-6 py-3 font-semibold text-right whitespace-nowrap">在线人数</th>
                            <th class="px-3 sm:px-6 py-3 font-semibold text-right whitespace-nowrap">采集时间</th>
                        </tr>
                    </thead>
                    <tbody id="history-body" class="text-xs sm:text-sm divide-y divide-slate-800/50">
                    </tbody>
                </table>
            </div>
        </div>
        
        <footer class="mt-6 text-center text-slate-600 text-[0.5rem] sm:text-[0.6rem] uppercase tracking-widest">
            @ 2026 奇趣分分彩官网 ALL.
        </footer>
    </div>

    <script>
        const API_URL = 'https://cp.18881.win/api/api.php?limit=10';
        const syncIndicator = document.getElementById('sync-indicator');

        function updateStatusText(message, isError = false) {
            const statusEl = document.getElementById('status-text');
            const statusSmall = document.getElementById('status-text-small');
            const colorClass = isError ? 'text-red-500' : 'text-green-500';
            if (statusEl) {
                statusEl.innerText = message;
                statusEl.className = `text-[0.6rem] font-bold ${colorClass} uppercase`;
            }
            if (statusSmall) {
                statusSmall.innerText = '●';
                statusSmall.className = `text-[0.8rem] font-bold ${colorClass} uppercase`;
                statusSmall.title = message;
            }
        }

        async function updateDisplay() {
            try {
                syncIndicator.classList.add('animate-ping');
                
                const response = await fetch(`${API_URL}&t=${Date.now()}`);
                const res = await response.json();

                if (res.status === 'success' && res.data.length > 0) {
                    const latest = res.data[0];

                    document.getElementById('top-period').innerText = latest.period;
                    document.getElementById('bg-period').innerText = latest.period.slice(-4);
                    document.getElementById('top-raw').innerText = Number(latest.onlinenumber).toLocaleString();
                    document.getElementById('top-tail').innerText = latest.sum_tail;
                    document.getElementById('top-time').innerText = latest.onlinetime.split(' ')[1] || latest.onlinetime;

                    const numArr = latest.full_number.split('');
                    const ballsHtml = numArr.map((n, i) => {
                        const ballColorClass = i === 0 ? 'ball-red' : 'ball-blue';
                        return `
                            <div class="${ballColorClass} responsive-ball w-14 h-20 sm:w-16 sm:h-20 rounded-2xl flex flex-col items-center justify-center shadow-xl border-t border-white/20">
                                <span class="text-white text-3xl sm:text-4xl font-black mono leading-none">${n}</span>
                                <span class="text-[0.45rem] sm:text-[0.6rem] text-white/40 font-bold uppercase mt-1">${i === 0 ? 'Tail' : 'L' + i}</span>
                            </div>
                        `;
                    }).join('');
                    document.getElementById('lucky-balls').innerHTML = ballsHtml;

                    const tableHtml = res.data.map(item => {
                        const timePart = item.onlinetime.split(' ')[1] || item.onlinetime;
                        return `
                            <tr class="hover:bg-blue-600/5 transition-colors group">
                                <td class="px-3 sm:px-6 py-3 mono text-[0.65rem] sm:text-xs text-slate-400 group-hover:text-blue-400 font-bold tracking-tighter whitespace-nowrap">${item.period}</td>
                                <td class="px-2 sm:px-4 py-3 text-center whitespace-nowrap">
                                    <span class="bg-slate-800 px-2 py-0.5 sm:px-3 sm:py-1 rounded-lg mono font-bold text-blue-400 text-[0.65rem] sm:text-xs">
                                        <span class="text-red-500">${item.full_number.charAt(0)}</span>${item.full_number.slice(1)}
                                    </span>
                                </td>
                                <td class="px-3 sm:px-6 py-3 text-right mono text-[0.65rem] sm:text-xs text-slate-500 font-medium whitespace-nowrap">${Number(item.onlinenumber).toLocaleString()}</td>
                                <td class="px-3 sm:px-6 py-3 text-right text-slate-600 text-[0.6rem] sm:text-xs whitespace-nowrap">${timePart}</td>
                            </tr>
                        `;
                    }).join('');
                    document.getElementById('history-body').innerHTML = tableHtml;

                    document.getElementById('last-update').innerText = '实时: ' + new Date().toLocaleTimeString();
                    updateStatusText('系统正常', false);
                } else {
                    updateStatusText('数据异常', true);
                }
            } catch (error) {
                console.error('Fetch Error:', error);
                updateStatusText('连接丢失', true);
            } finally {
                setTimeout(() => syncIndicator.classList.remove('animate-ping'), 500);
            }
        }

        setInterval(updateDisplay, 3000);
        
        updateDisplay();

        window.addEventListener('focus', () => {
            updateDisplay();
        });
    </script>

    <style>
        .scrollbar-thin::-webkit-scrollbar {
            height: 4px;
            width: 4px;
            background: transparent;
        }
        .scrollbar-thin::-webkit-scrollbar-thumb {
            background: #334155;
            border-radius: 8px;
        }
        .scrollbar-thin::-webkit-scrollbar-track {
            background: #1e293b;
        }
        @media (max-width: 420px) {
            .xs\:block { display: block; }
            .xs\:hidden { display: none; }
        }
        .responsive-ball {
            width: 3.2rem;
            height: 4.5rem;
        }
        @media (max-width: 380px) {
            .responsive-ball {
                width: 2.8rem;
                height: 4rem;
            }
            .responsive-ball span:first-child {
                font-size: 1.8rem;
            }
        }
    </style>
</body>
</html>
