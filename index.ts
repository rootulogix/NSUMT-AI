import { Telegraf } from 'telegraf';
import http from 'http';

const token = process.env.BOT_TOKEN || '';
if (!token) {
  console.log('Warning: BOT_TOKEN is not set in environment variables.');
}

const bot = new Telegraf(token);

bot.start((ctx) => ctx.reply('Бот NSUMT-AI успешно запущен и работает!'));
bot.on('text', (ctx) => ctx.reply(`Эхо-ответ: ${ctx.message.text}`));

bot.launch();
console.log('Telegram bot started successfully!');

// HTTP-сервер для Render, чтобы сервис не засыпал и отвечал на внешние запросы
const server = http.createServer((req, res) => {
  res.writeHead(200, { 'Content-Type': 'text/plain' });
  res.end('NSUMT-AI Bot is running continuously!');
});

const PORT = Number(process.env.PORT) || 3000;
server.listen(PORT, '0.0.0.0', () => {
  console.log(`Health-check server is listening on port ${PORT}`);
});
