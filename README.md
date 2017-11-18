# LuoguLite

[Online Judge 系统](https://baike.baidu.com/item/Online%20Judge/2397914)（简称 OJ ）是在线判题系统，用户在 OJ
 上可以在线提交程序多种程序源代码，系统对源代码进行编译和执行，并通过预先设计的测试数据来检验程序源代码的正确性。 
。当然，除了评测代码以外，各种 OJ 还提供别的功能，比如讨论社区、比赛等。

目前有很多著名的 OJ 网站，包括 [洛谷](https://www.luogu.org/)、 [POJ](http://poj.org/)、 [HDOJ](http://acm.hdu.edu.cn) 等。如果同学希望在自己的电脑或者服务器中架设一个 OJ 系统，有很多开源的软件可以使用，例如 [VJ4](https://github.com/vijos/vj4), [HustOJ](https://github.com/freefcw/hustoj) , [UOJ](https://github.com/vfleaking/uoj) 等等。这些系统已经满足一般情况的使用了。但是我们认为，这些系统在某些方面还有改进的空间。而且洛谷的团队的很好用的功能，也应该加入到这样的开源OJ系统中。基于以上原因，我们决定开坑 [LuoguLite](https://github.com/luogu-dev/luogulite) 。

LuoguLite 是一个全新的开源 Online Judge 系统。虽然和洛谷本身没有直接的关系，但是其设计中、利用了很多洛谷的思想，并且继承了洛谷优秀的用户体验。无论是跟着我们学习，自己搭建一个 Online Judge 系统，还是直接使用这个开源系统，都有很大的意义。

我们大概用到的技术栈（希望大家事先学习）：
- 服务器后端：php / Symfony3 / MySQL
- 网页前段：JavaScript / Node.js / Vue.js / Semantic UI

我们会从零开始直播完成这个项目。由于一个这样的项目需要涉及到 Web 服务器技术、 Web 前端技术、以及评测机技术，因此如果能够学习并熟练应用这些知识，相信大家会成为一个优秀的全栈工程师。我们会带着大家去学习并通过具体应用这些知识，构建出这样一个系统。这个项目也非常欢迎大家的 Pull Request 。
