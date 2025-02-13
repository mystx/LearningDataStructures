/**
 * This is a js stopwatch.
 * Timing code is not the perfect solution.
 * But it is a solution.
 */
timer = {
    getTime : () => {
        return performance.now();
    },
    setStart : () => {
        timer.start = timer.getTime();
    },
    setEnd : () => {
        timer.end = timer.getTime();
    },
    logTime : () => {
        console.log(`Time Elapsed: ${(timer.end-timer.start)/1000} seconds`);
    }
}