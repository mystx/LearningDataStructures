methods = {
    /**
     * This is slow because it has 5n + 2 operations
     * Where n is the number being counted up to
     * When n is small its fast. when n is large its extremely slow.
     * the speed is proportional to the size of n
     * Be careful with this - 1000000000 crashed my browser
     * @param {number} n 
     * @returns 
     */
    slow: (n) => {
        let total = 0;
        for(let i=0; i<=n; i++)
        {
            total += 1
        }
        return total
    },

    /**
     * this only performs 3 operations
     * resulting in it being very very fast
     * When n is small its fast. when n is large its still fast.
     * the speed does not depend on the size of n
     * @param {number} n 
     * @returns {number}
     */
    efficient: (n) => {
        return n*(n+1)/2
    },

    /**
     * this is O(n)
     * @param {number} n 
     */
    countUpAndDown: (n) => {
        console.log("Going Up");
        //here we have O(n)
        for(let i=0;i<=n;i++)
        {
            console.log(i);
        }
        console.log("Going Down");
        //here we have O(n)
        for(let j=n-1;j>=0;j--)
        {
            console.log(j);
        }
        console.log("Finished Counting");
    },

    /**
     * this is 2 loops.
     * so this is 0(n^2) (Big O of N Squared)
     * As n grows the time taken is Squared!
     * Be careful with this - 500 took 3.5 seconds on a Ryzen 5 5600 with 32gb ram.
     * I assume like 1k - 2k would crash the browser.
     * @param {number} n 
     */
    printAllPairs: (n) => {
        for(var i=0;i<n;i++) {
            for(var j=0;j<n;j++) {
                console.log(i,j);
            }
        }
    },
    /**
     * logs at least 5
     * Big O is: O(5n) min
     * But its really O(N)
     * at scale 5n wont matter so just n
     * @param {number} n 
     */
    logAtLeast5: (n) => {
        for(i=1;i<=Math.max(5,n);i++) {
            console.log(i)
        }
    }
}