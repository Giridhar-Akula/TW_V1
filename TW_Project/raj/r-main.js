const openSidebarBtn = document.getElementById('openSidebarBtn');
                            const sidebar = document.getElementById('sidebar');
                    
                            openSidebarBtn.addEventListener('click', () => {
                                sidebar.style.width = '250px';
                            });
                    
                            document.addEventListener('click', (event) => {
                                if (event.target !== openSidebarBtn && event.target !== sidebar) {
                                    sidebar.style.width = '0';
                                }
                            });