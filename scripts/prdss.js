(function() {
		
    let field = document.querySelector('.products-items');
    let li = Array.from(field.children);

    function FilterProduct() {
        for(let i of li){
            const name = i.querySelector('tag');
            const x = name.textContent;
            i.setAttribute("data-category", x);
        }

        let indicator = document.querySelector('.indicator').children;

        this.run = function() {
            for(let i=0; i<indicator.length; i++)
            {
                indicator[i].onclick = function () {
                    for(let x=0; x<indicator.length; x++)
                    {
                        indicator[x].classList.remove('active-1');
                    }
                    this.classList.add('active-1');
                    const displayItems = this.getAttribute('data-filter');

                    for(let z=0; z<li.length; z++)
                    {
                        li[z].style.transform = "scale(0)";
                        setTimeout(()=>{
                            li[z].style.display = "none";
                        }, 500);

                        if ((li[z].getAttribute('data-category') == displayItems) || displayItems == "all")
                         {
                             li[z].style.transform = "scale(1)";
                             setTimeout(()=>{
                                li[z].style.display = "flex";
                            }, 500);
                         }
                    }
                };
            }
        }
    }
    function SortProduct() {
        let select = document.getElementById('select');
        let ar = [];
    
        for (let i of li) {
            const last = i.lastElementChild;
            const x = last.textContent.trim();
            const y = parseFloat(x.replace('đ', '').replace(',', '').trim());
            i.setAttribute("data-price", y);
            ar.push(i);
        }
    
        this.run = () => {
            addevent();
        }
    
        function addevent() {
            select.onchange = sortingValue;
        }
    
        function sortingValue() {
            if (this.value === 'Default') {
                while (field.firstChild) { field.removeChild(field.firstChild); }
                field.append(...ar);
            }
            if (this.value === 'LowToHigh') {
                SortElem(field, li, true);
            }
            if (this.value === 'HighToLow') {
                SortElem(field, li, false);
            }
        }
    
        function SortElem(field, li, asc) {
            let dm, sortli;
            dm = asc ? 1 : -1;
            sortli = li.sort((a, b) => {
                const ax = parseFloat(a.getAttribute('data-price'));
                const bx = parseFloat(b.getAttribute('data-price'));
                return ax > bx ? (1 * dm) : (-1 * dm);
            });
            while (field.firstChild) { field.removeChild(field.firstChild); }
            field.append(...sortli);
        }
    }
    
    new FilterProduct().run();
    new SortProduct().run();
})();

let items = document.querySelectorAll('.carousel .carousel-item')

	items.forEach((el) => {
        const minPerSlide = 4
        let next = el.nextElementSibling
        for (var i=1; i<minPerSlide; i++) {
            if (!next) {
        // wrap carousel by using first child
                next = items[0]
            }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
        }
    })
