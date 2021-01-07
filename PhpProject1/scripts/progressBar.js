function onClick() {
                console.log("Clicked: " + this.index);
                return true;
            }
            
            function beforeEntry() {
                console.log("Before entry: " + this.index);
                return true;
            }

            function afterEntry() {
                console.log("After entry: " + this.index);
            }
        
            function beforeExit() {
                console.log("Before exit: " + this.index);
                return true;
            }

            function afterExit() {
                console.log("After exit: " + this.index);
            }

            $(document).ready(function () {
                var $progressDiv = $("#progressBar");
                var $progressBar = $progressDiv.progressStep({radius: 30,
                    margin: 100,
                    labelOffset: 50,
                    'font-size': 20,
                    activeColor: "BlueViolet"
                });
                $progressBar.addStep("Documents Required");
                $progressBar.addStep("Lease Information");
                $progressBar.addStep("Interest Calculator");
                $progressBar.addStep("Finish ");
                //$progressBar.addStep("Schedule");
                
                for (var stepCounter = 0; stepCounter < 4; stepCounter++) {
                    var currentStep = $progressBar.getStep(stepCounter);
                    currentStep.onClick = onClick;
                    currentStep.beforeEntry = beforeEntry;
                    currentStep.afterEntry = afterEntry;
                    currentStep.beforeExit = beforeExit;
                    currentStep.afterExit = afterExit;
                }
                
                $progressBar.setCurrentStep(0);
                $progressBar.refreshLayout();
                
                function resetVisited() {
                    for (var counter = 0; counter < 4; counter++) {
                        var currentStep = $progressBar.getStep(counter);
                        currentStep.setVisited(false);
                    }
                }
                
                var counter = 1;
                var intervalId = null;
                function startLoop() {
                    if (intervalId) {
                        // continue
                    }
                    else {
                        intervalId = setInterval(function () {
                            if (counter == 0) {
                                resetVisited();
                            }
                            $progressBar.setCurrentStep(counter);
                            counter++;
                            if (counter > 3) {
                                counter = 0;
                            }
                        }, 1000);
                    }
                }
                
                function stopLoop() {
                    if (intervalId) {
                        clearInterval(intervalId);
                        intervalId = null;
                    }
                }
                
                $("#startLoop").click(startLoop);
                $("#stopLoop").click(stopLoop);
                $("#resetVisited").click(resetVisited);
            });