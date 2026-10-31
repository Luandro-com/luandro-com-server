export default {
  fetch(request, env) {
    const url = new URL(request.url);
    if (url.hostname === "resume.luandro.com") return env.RESUME.fetch(request);
    if (url.hostname === "www.luandro.com") return env.SITE.fetch(request);
    return Response.redirect("https://luandro.com/", 302);
  },
};
